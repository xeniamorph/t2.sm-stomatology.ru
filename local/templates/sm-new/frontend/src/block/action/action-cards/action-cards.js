import BEM from "tao-bem";
import $ from 'jquery';

class ActionCards extends BEM.Block {
	static get blockName() {
		return 'action-cards';
	}

	onInit() {
		$(document).on('click', '.action-cards .more-less__button', function(){
			$(this).attr("disabled", "disabled");
			if($('.action-cards__items').length > 0) {
				showPageContent('.action-cards__items', '.action-cards__item');
			}
		});

		function showPageContent (parentWrap, childWrap) {
			let targetContainer = $(parentWrap),
				targetPagination = $('.more-less'),
				url =  location.pathname + $('.more-less__button').attr('data-url'),
				heightContainer = targetContainer.height() + 150;
			if (url !== undefined) {
				$.ajax({
					type: 'GET',
					url: url,
					dataType: 'html',
					success: function(data) {
						$('.more-less__button').remove();
						let elements = $(data).find(childWrap),
							pagination = $(data).find('.more-less__button');
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

ActionCards.register();

export default ActionCards;