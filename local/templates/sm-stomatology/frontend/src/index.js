window.Tether =  require("tether");
import "babel-polyfill";
import $ from 'jquery';
require("bootstrap");
import "owl.carousel";
import "magnific-popup";
import "jquery.maskedinput/src/jquery.maskedinput.js";
import pickmeup from "pickmeup/js/pickmeup";

import 'style';
import 'block/common';
import 'layout/work';
import 'block/custom/header';
import 'block/custom/logo';
import 'block/custom/nav';
import 'block/custom/services-carousel';
import 'block/custom/main-carousel';
import 'block/custom/main-services';
import 'block/custom/address-gallery';
import 'block/custom/service-link';
import 'block/custom/main-contacts';
import 'block/custom/main-features';
import 'block/custom/feature';
import 'block/custom/contacts-list';
import 'block/custom/news';
import 'block/custom/map';
import 'block/custom/footer';
import 'block/custom/footer-menu';
import 'block/custom/phone';
import 'block/custom/search';
import 'block/custom/callback';
import 'block/custom/socials';


(function () {
	"use strict";
	$(function () {
		$.fn.andSelf = $.fn.addBack;
		if ($('body').hasClass('c-homepage')) {
			require.ensure([], (require) => {
				require('page/main');
			}, 'main');
		}
	});


})();

$(function(){
	anchorButton('.js-anchor');
	scrollToAnchor();
});

pickmeup.defaults.locales['ru'] = {
	days: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
	daysShort: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
	daysMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
	months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
	monthsShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек']
};

function scrollToAnchor(func) {

	var $anchor = $(window.location.hash);

	if(!$anchor.length){
		return false;
	}

	var extraOffset = 90;
	var offsetTop = $anchor.offset().top - extraOffset;

	$('html, body').animate(
		{scrollTop: offsetTop},
		{
			duration: 1000,
			complete: func,
			step: function(current, tween) {
				tween.end = $anchor.offset().top - extraOffset;
			}
		}
	);
}

function anchorButton(selector, func){

	$(selector).on('click', function(e){
		e.preventDefault();
		var anchor_text = $(this).attr('href');
		var $anchor = $(anchor_text);

		if(!$anchor.length){
			return false;
		}

		var extraOffset = 90;
		var offsetTop = $anchor.offset().top - extraOffset;

		$('html, body').animate(
			{scrollTop: offsetTop},
			{
				duration: 1000,
				complete: func,
				step: function(current, tween) {
					tween.end = $anchor.offset().top - extraOffset;
				}
			}
		);

	});
}
