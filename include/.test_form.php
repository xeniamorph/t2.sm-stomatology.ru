<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CJSCore::Init(array("jquery"));
$APPLICATION->AddHeadScript('/js/jquery.maskedinput.min.js');
?>

<a href="" class="show-form">show form</a><br />
<a href="" class="show-form-night">show form night</a>

<script>
$(document).ready(function() {
    $('.show-form').click(function() {
        $.fancybox.open(
            { href : '/include/forms/recall_3.php' },
            {
                openEffect	: 'none',
                closeEffect	: 'none',
                type: 'ajax',
                maxWidth: 380,
                minHeight: 460,
                padding: 0
            }
        );
        return false;
    })
    $('.show-form-night').click(function() {
        $.fancybox.open(
            { href : '/include/forms/recall_night.php' },
            {
                openEffect  : 'none',
                closeEffect : 'none',
                type: 'ajax',
                maxWidth: 530,
                minHeight: 590
            }
        );
        return false;
    });
});
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

<script src="/js/jquery.placeholder.js" type="text/javascript"></script>
<link href="/js/fancybox/jquery.fancybox.css" type="text/css" rel="stylesheet" />
<script src="/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<link href="/css/style.css" type="text/css" rel="stylesheet" />
<script src="/js/script.js" type="text/javascript"></script>
