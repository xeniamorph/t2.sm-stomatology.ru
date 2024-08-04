<?php
namespace CustomProperties;

abstract class Base
{
	abstract protected static function getAdminEditHtml($value, $htmlControlName, $counter = null);
	// Редактирование в админке
	public static function getPropertyFieldHtml($propertyFields, $value, $htmlControlName)
	{
		if ($htmlControlName['MODE'] == 'FORM_FILL' && \Bitrix\Main\Loader::includeModule('fileman')) {
			return static::getAdminEditHtml($value, $htmlControlName);
		} else {
			return false;
		}
	}

	public static function getMultiplePropertyFieldHtml($propertyFields, $values, $htmlControlName)
	{
		if ($htmlControlName['MODE'] == 'FORM_FILL' && \Bitrix\Main\Loader::includeModule('fileman')) {
			$inputHtml = '';
			$counter = 1;
			foreach ($values as $value) {
				$inputHtml .= static::getAdminEditHtml($value, $htmlControlName, $counter);
				$counter++;
			}

			$inputHtml .= static::getAdminEditHtml(null, $htmlControlName, $counter);

			return $inputHtml;
		} else {
			return false;
		}
	}

	protected static function createFileHtmlControl($value, $htmlControlName, $index = false)
	{
		if (intval($index > 0)) {
			$indexInputNamePart = "[{$index}]";
		} else {
			$indexInputNamePart = '';
		}
		$inputHtml = \CFileInput::Show(
			$htmlControlName . $indexInputNamePart,
			$value,
			array(
				'IMAGE' => 'Y',
				'PATH' => 'Y',
				'FILE_SIZE' => 'Y',
				'DIMENSIONS' => 'Y',
				'IMAGE_POPUP' => 'Y',
				'MAX_SIZE' => array(
					'W' => \COption::GetOptionString('iblock', 'detail_image_size'),
					'H' => \COption::GetOptionString('iblock', 'detail_image_size'),
				)
			),
			array(
				'upload' => true,
				'medialib' => false,
				'file_dialog' => false,
				'cloud' => false,
				'del' => array(
					'NAME' => $htmlControlName . $indexInputNamePart . '[DELETE]'
				),
				'description' => false
			)
		);
		$inputHtml .= '<input type="hidden" name="' . $htmlControlName . $indexInputNamePart
			. '[OLD_VALUE]" value="' . $value['VALUE'] . '">';

		return $inputHtml;
	}

	protected static function processFilledFormValue($propertyFields, $propertyValue, $isImg = true)
	{
		$documentRoot = \Bitrix\Main\Application::getDocumentRoot();
		$uploadDir = \Bitrix\Main\Config\Option::get('main', 'upload_dir', 'upload');
		if (!empty($propertyValue['DELETE'])) {
			return array('VALUE' => '');
		}
		if (!empty($propertyValue['tmp_name'])) {
			$bitrixFileService = new \CFile();

			$tempFilePath = $documentRoot . '/' . $uploadDir . '/' . $propertyValue['name'];
			move_uploaded_file($propertyValue['tmp_name'], $tempFilePath);

			if (!$bitrixFileService->IsImage($tempFilePath) && $isImg) {
				unlink($tempFilePath);
				return array('VALUE' => '');
			}

			$file = $bitrixFileService->MakeFileArray($tempFilePath);
			$file = array_merge($file, array('MODULE_ID' => 'custompropertiesmodule', 'del' => 'N'));
			$fileResizeResult = $bitrixFileService->SaveFile($file, 'iblock/customProperties');

			if ($fileResizeResult !== false) {
				unlink($tempFilePath);
			}

			return array('VALUE' => $fileResizeResult);
		} elseif (!empty($propertyValue['OLD_VALUE'])) {
			return array('VALUE' => intval($propertyValue['OLD_VALUE']));
		} else {
			return false;
		}
	}

	protected static function addHTMLEditorFrame(
		$strTextFieldName,
		$strTextValue,
		$strTextTypeFieldName,
		$strTextTypeValue,
		$arSize = Array("height"=>350),
		$CONVERT_FOR_WORKFLOW="N",
		$WORKFLOW_DOCUMENT_ID=0,
		$NEW_DOCUMENT_PATH="",
		$textarea_field="",
		$site = false,
		$bWithoutPHP = true,
		$arTaskbars = false,
		$arAdditionalParams = Array()
	)
	{
		// We have to avoid of showing HTML-editor with probably unsecure content when loosing the session [mantis:#0007986]
		if ($_SERVER["REQUEST_METHOD"] == "POST" && !check_bitrix_sessid())
			return;

		global $htmled, $usehtmled;
		$incomeStrTextFieldName = $strTextFieldName;
		$strTextFieldName = preg_replace("/[^a-zA-Z0-9_:\.]/is", "", $strTextFieldName);

		if(is_array($arSize))
			$iHeight = $arSize["height"];
		else
			$iHeight = $arSize;

		$strTextValue = htmlspecialcharsback($strTextValue);
		$dontShowTA = isset($arAdditionalParams['dontshowta']) ? $arAdditionalParams['dontshowta'] : false;

		$textType = self::showTypeSelector(array(
			'name' => $incomeStrTextFieldName,
			'key' => $arAdditionalParams['saveEditorKey'],
			'strTextTypeFieldName' => $strTextTypeFieldName,
			'strTextTypeValue' => $strTextTypeValue,
			'bSave' => $arAdditionalParams['saveEditorState'] !== false
		));

		$curHTMLEd = $textType == 'editor';
		setEditorEventHandlers($strTextFieldName);
		?>
		<textarea class="typearea" style="<? echo(($curHTMLEd || $dontShowTA) ? 'display:none;' : '');?>width:100%;height:<?=$iHeight?>px;" name="<?=$incomeStrTextFieldName?>" id="bxed_<?=$strTextFieldName?>" wrap="virtual" <?=$textarea_field?>><?= htmlspecialcharsbx($strTextValue)?></textarea>
		<?

		if ($bWithoutPHP)
			$arTaskbars = Array("BXPropertiesTaskbar", "BXSnippetsTaskbar");
		else if (!$arTaskbars)
			$arTaskbars = Array("BXPropertiesTaskbar", "BXSnippetsTaskbar", "BXComponents2Taskbar");

		$minHeight = $arAdditionalParams['minHeight'] ? intval($arAdditionalParams['minHeight']) : 450;
		$arParams = Array(
			"bUseOnlyDefinedStyles"=>\COption::GetOptionString("fileman", "show_untitled_styles", "N")!="Y",
			"bFromTextarea" => true,
			"bDisplay" => $curHTMLEd,
			"bWithoutPHP" => $bWithoutPHP,
			"arTaskbars" => $arTaskbars,
			"height" => max($iHeight, $minHeight)
		);

		if (isset($arAdditionalParams['use_editor_3']))
			$arParams['use_editor_3'] = $arAdditionalParams['use_editor_3'];

		$arParams['site'] = (strlen($site)<=0?LANG:$site);
		if(isset($arSize["width"]))
			$arParams["width"] = $arSize["width"];

		if (isset($arAdditionalParams))
			$arParams["arAdditionalParams"] = $arAdditionalParams;

		if (isset($arAdditionalParams['limit_php_access']))
			$arParams['limit_php_access'] = $arAdditionalParams['limit_php_access'];

		if (isset($arAdditionalParams['toolbarConfig']))
			$arParams['toolbarConfig'] = $arAdditionalParams['toolbarConfig'];

		if (isset($arAdditionalParams['componentFilter']))
			$arParams['componentFilter'] = $arAdditionalParams['componentFilter'];

		$arParams['setFocusAfterShow'] = isset($arParams['setFocusAfterShow']) ? $arParams['setFocusAfterShow'] : false;

		\CFileman::ShowHTMLEditControl($strTextFieldName, $strTextValue, $arParams);
	}

	protected static function showTypeSelector($params)
	{
		global $USER;
		$useEditor3 = \COption::GetOptionString('fileman', "use_editor_3", "Y") == "Y";
		$name = $params['name'];
		$strTextFieldName = preg_replace("/[^a-zA-Z0-9_:\.]/is", "", $name);
		$key = isset($params['key']) ? $params['key'] : '';
		$showTextType = isset($params['strTextTypeFieldName']) && $params['strTextTypeFieldName'];
		$strTextTypeFieldName = $params['strTextTypeFieldName'];
		$textType = $params['strTextTypeValue'] == 'html' ? 'html' : 'text';
		$bxid = 'bxed_'.$strTextFieldName;

		$replaceNewLines = \COption::GetOptionString('fileman', "replace_new_lines", "Y") == "Y";

		if ($textType == 'html')
		{
			$curType = \CUserOptions::GetOption('html_editor', "type_selector_".$strTextFieldName.$key, false, $USER->GetId());
			$curType = $curType['type'];
			if ($curType && in_array($curType, array('html', 'editor')))
			{
				$textType = $curType;
			}
		}
		$ch = "checked=\"checked\"";
		?>
		<div class="bx-ed-type-selector">
			<?if ($showTextType):?>
				<span class="bx-ed-type-selector-item"><input <? if ($textType == 'text') {echo $ch;}?>  type="radio" name="<?= $strTextTypeFieldName?>" id="<?= $bxid?>_text" value="text" /><label for="<?= $bxid?>_text"><?= GetMessage('FILEMAN_FILEMAN_TYPE_TEXT')?></label></span>

				<span class="bx-ed-type-selector-item"><input <? if ($textType == 'html') {echo $ch;}?>  type="radio" name="<?= $strTextTypeFieldName?>" id="<?= $bxid?>_html" value="html" /><label for="<?= $bxid?>_html">HTML</label></span>

				<span class="bx-ed-type-selector-item"><input <? if ($textType == 'editor') {echo $ch;}?>  type="radio" name="<?= $strTextTypeFieldName?>" id="<?= $bxid?>_editor" value="html" /><label for="<?= $bxid?>_editor"><?= GetMessage('FILEMAN_FILEMAN_TYPE_HTML_EDITOR')?></label></span>
			<? else:?>
				<span class="bx-ed-type-selector-item"><input type="checkbox" id="<?= $bxid?>_editor" name="<?= $strTextTypeFieldName?>" value="Y" <? if ($textType == 'editor') {echo $ch;}?> /><label for="<?= $bxid?>_editor"><?= GetMessage("FILEMAN_FILEMAN_USE_HTML_EDITOR");?></span>
			<? endif;?>
		</div>
		<script>
			function onChangeInputType(editorName)
			{
				if (window['changeType_' + editorName] && typeof window['changeType_' + editorName] == 'function')
				{
					window['changeType_' + editorName]();
				}
				else
				{
					return setTimeout(function(){onChangeInputType(editorName);}, 100);
				}
			}

			BX.ready(function()
			{
				var
					pOptText = BX("<?= $bxid?>_text"),
					pOptHtml = BX("<?= $bxid?>_html"),
					pOptEditor = BX("<?= $bxid?>_editor");

				if (pOptText)
				{
					BX.bind(pOptText, 'click', function(){onChangeInputType('<?= $strTextFieldName?>');});
				}
				if (pOptHtml)
				{
					BX.bind(BX("<?= $bxid?>_html"), 'click', function(){onChangeInputType('<?= $strTextFieldName?>');});
				}
				if (pOptEditor)
				{
					BX.bind(BX("<?= $bxid?>_editor"), 'click', function(){onChangeInputType('<?= $strTextFieldName?>');});
				}
			});
		</script>

		<?if ($useEditor3):?>
		<script>
			BX.ready(function()
			{
				top.changeType_<?= $strTextFieldName?> = window.changeType_<?= $strTextFieldName?> = function(bSave)
				{
					var
						replaceNewLines = <?= $replaceNewLines ? 'true' : 'false'?>,
						pOptHtml = BX("<?= $bxid?>_html"),
						pOptEditor = BX("<?= $bxid?>_editor");

					var curType = pOptEditor.checked ? 'editor' : 'text';
					if (pOptHtml && pOptHtml.checked)
					{
						curType = 'html';
					}

					// Save choice
					<?if ($params['bSave']):?>
					if (bSave !== false)
					{
						BX.userOptions.save('html_editor', 'type_selector_<?= $strTextFieldName.$key?>', 'type', curType);
					}
					<?endif;?>

					<?if (isset($params['externalFuncName']) && $params['externalFuncName']):?>
					var func = window['<?= $params['externalFuncName']?>'];
					if (func && typeof func == 'function')
					{
						func(curType);
					}
					<?else:?>
					// Editor
					var
						editorName = '<?= $strTextFieldName?>',
						textarea = BX("bxed_<?= $strTextFieldName?>"),
						show = pOptEditor.checked, /*&& textarea.style.display != "none"*/
						editor = window.BXHtmlEditor.Get(editorName),
						textareaValue = textarea.value || '';

					replaceNewLines = replaceNewLines && window.BXHtmlEditor.ReplaceNewLines;

					if (replaceNewLines)
					{
						if (curType == 'html')
						{
							textareaValue = window.BXHtmlEditor.ReplaceNewLines(textareaValue);
							textarea.value = textareaValue;
						}
						else if (curType == 'editor')
						{
							textareaValue = window.BXHtmlEditor.ReplaceNewLines(textareaValue);
						}
						else
						{
							textareaValue = window.BXHtmlEditor.ReplaceNewLinesBack(textareaValue);
							textarea.value = textareaValue;
						}
					}

					function runEditor(editor, textareaValue)
					{
						textarea.style.display = "none";

						editor.Show();
						if (editor.sandbox.inited)
						{
							editor.SetContent(textareaValue, true);
						}
						else
						{
							BX.addCustomEvent(editor, "OnCreateIframeAfter", function()
							{
								editor.SetContent(textareaValue, true);
							});
						}
					}

					if (editor && editor.Check())
					{
						if(show)
						{
							runEditor(editor, textareaValue);
						}
						else
						{
							if (editor.IsShown())
								editor.SaveContent();
							editor.Hide();
							textarea.style.display = "";
							if (replaceNewLines && curType == 'text')
							{
								textareaValue = textarea.value = window.BXHtmlEditor.ReplaceNewLinesBack(textarea.value);
							}
						}
					}
					else if(show)
					{
						BX.addCustomEvent(window.BXHtmlEditor, "OnEditorCreated", function(editor)
						{
							if (editor.id == editorName)
							{
								runEditor(editor, textareaValue);
							}
						});
						window.BXHtmlEditor.Show(false, editorName);
						textarea.style.display = "none";
					}
					<?endif;?>
				}
			});
		</script>
	<?else: /* if ($useEditor3) */ ?>
		<script>
			BX.ready(
				function()
				{
					window.changeType_<?= $strTextFieldName?> = function(bSave)
					{
						var
							pOptHtml = BX("<?= $bxid?>_html"),
							pOptEditor = BX("<?= $bxid?>_editor");

						var curType = pOptEditor.checked ? 'editor' : 'text';
						if (pOptHtml && pOptHtml.checked)
						{
							curType = 'html';
						}

						<?if (isset($params['externalFuncName']) && $params['externalFuncName']):?>
						var func = window['<?= $params['externalFuncName']?>'];
						if (func && typeof func == 'function')
						{
							func(curType);
						}

						<?else:?>
						// Editor
						var el = BX("bxed_<?= $strTextFieldName?>");
						if(pOptEditor.checked && el.style.display != "none")
						{
							var onEditorInit = function(pMainObj)
							{
								pMainObj.SetContent(pMainObj.PreparseHeaders(el.value));
								pMainObj.Show(true);
								pMainObj.LoadContent();
							};

							el.style.display = "none";
							if(!el.pMainObj)
								el.pMainObj = new BXHTMLEditor("<?= $strTextFieldName?>", onEditorInit);
							else
								onEditorInit(el.pMainObj);
						}
						else if(!pOptEditor.checked && el.style.display == "none")
						{
							el.pMainObj.Show(false);
							el.pMainObj.SaveContent(true);
							el.style.display = "";
						}
						<?endif;?>

						// Save choice
						<?if ($params['bSave']):?>
						if (bSave !== false)
						{
							BX.ajax.get('/bitrix/admin/fileman_manage_settings.php?<?= bitrix_sessid_get()?>&target=text_type&edname=<?= $strTextFieldName?>&key=<?= $key?>&type=' + curType);
						}
						<?endif;?>
					};


					var pOptEditor = BX("<?= $bxid?>_editor");
					if (pOptEditor)
					{
						BX.addCustomEvent(pOptEditor.form, 'onAutoSaveRestore', function (ob, data)
						{
							var pOptEditor = BX("<?= $bxid?>_editor");

							setTimeout(function()
							{
								if (pOptEditor.checked)
								{
									var pMainObj = GLOBAL_pMainObj['<?= $strTextFieldName?>'];
									if (pMainObj && pMainObj.bShowed)
									{
										pMainObj.SetContent(data[pMainObj.name]);
										pMainObj.LoadContent();
									}
								}
							}, 100);
						});
					}
				}
			);
		</script>
	<?endif;/* if ($useEditor3) */
		return $textType;
	}
}
