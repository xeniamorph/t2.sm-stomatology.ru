import BEM from "tao-bem";
import $ from 'jquery';

class MDoctors extends BEM.Block {
	static get blockName() {
		return 'm-doctors';
	}

	onInit() {
		$(document).on('click', '.m-doctors__button', function(){
			$(this).attr("disabled", "disabled");
			if($('.m-doctors__items').length > 0) {
				showPageContent('.m-doctors__items', '.doctor-card');
			}
		});

		function showPageContent (parentWrap, childWrap) {
			let targetContainer = $(parentWrap),
				targetPagination = $('.m-doctors__show'),
				url =  location.pathname + $('.m-doctors__button').attr('data-url'),
				heightContainer = targetContainer.height() + 150;
			if (url !== undefined) {
				$.ajax({
					type: 'GET',
					url: url,
					dataType: 'html',
					success: function(data) {
						$('.m-doctors__button').remove();
						let elements = $(data).find(childWrap),
							pagination = $(data).find('.m-doctors__button');
						elements.attr("data-page", url);
						targetContainer.append(elements);
						targetPagination.html(pagination);
						if (!$('.no-scroll')) {
							$('body,html').animate({scrollTop: heightContainer}, 200);
						}
					}
				});
			}
		}
	}
}

MDoctors.register();

export default MDoctors;