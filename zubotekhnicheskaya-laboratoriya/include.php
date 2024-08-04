<style>
.l-container--page .col-md-3 .b-aside-menu, .l-container--page .col-md-3 > hr {
	display: none;
}
.table.b-table .sub-category {
	background-color: #e5ece9;
	text-align: center;
	text-transform: uppercase;
}
.breadcrumb {
	padding-left: 0;
}
.bx-wrapper .bx-prev {
	left: -10px;
}
.bx-wrapper .bx-next {
	right: -10px;
}
.b-form__group--float-label .b-form__control--empty + label {
    top: 4px;
}
.modal .modal-title-lab {
    font-size: 24px;
}
.lab-amount {
	padding: 10px;
	width: 70px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="/js/jquery.bxslider.min.js" type="text/javascript"></script>
<script>
	//try {
		document.addEventListener('DOMContentLoaded', function() {
			$(".fancybox_news").fancybox({
				openEffect: 'none',
				closeEffect: 'none',
				loop: false,
			});
			$('.bxslider_news').bxSlider({
				minSlides: 1,
				maxSlides: 5,
				slideWidth: 165,
				slideMargin: 10
			});

			var nav_link = $(".nav-tabs .nav-link"),
				tab_content = $(".tab-content .tab-pane")

			nav_link.click(function() {
				if(!$(this).hasClass('active')){
					nav_link.removeClass('active');
					$(this).addClass('active');

					var tab_id = $(this).attr('href');
					tab_content.removeClass('active');
					$(tab_id).addClass('active');
				}
				return false;
			});
		});
		
	/*} catch (error) {
		
	}*/

</script>
<h1 class="b-heading">
Зуботехническая лаборатория «SMD LAB» <a href="#" class="b-heading__link hidden-md-down" data-toggle="modal" data-target="#modal-ask-question">
Есть вопросы? </a></h1>
<div class="b-page-img" style="background-image: url(/upload/ztl.jpg);">
</div>
