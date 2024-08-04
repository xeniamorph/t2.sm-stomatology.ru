import BEM from "tao-bem";
import $ from 'jquery';

class ReviewsList extends BEM.Block {
	static get blockName() {
		return 'reviews-list';
	}

	onInit() {
		$(document).on('click', '.reviews-list__pager a', function(e){
			e.preventDefault();
			let url = $(this).attr('href');
			if($('.reviews-list__items').length > 0 && url !== undefined) {
				$.ajax({
					type: 'GET',
					url: url,
					dataType: 'html',
					success: function(data) {
						let elements = $(data).find('.reviews-list__item'),
							pagination = $(data).find('.b-pagination__bg');
						elements.attr("data-page", url);
						$('.reviews-list__items').html(elements);
						$('.b-pagination .container').html(pagination);
						$('body,html').animate({
							scrollTop: $('.reviews-list').offset().top - 150
						}, 200);

						$('.js-fancybox').fancybox();
					}
				});
			}
		});

		$('.reviews-list__btn').click(function(e) {
			e.preventDefault();
			$("html, body").animate({
				scrollTop: $($(this).attr("href")).offset().top - 250 + "px"
			}, {
				duration: 500,
				easing: "swing"
			});
		})
	}
}

ReviewsList.register();

export default ReviewsList;