"use strict";
/* global ymaps */

import { ymapLazyload } from './ymap-lazyload';
import $ from "jquery";

$(document).ready(function() {
	window.ymap = new ymapLazyload();
	window.ymap.default.zoom = 10;
	window.ymap.default.coords = [55.750987, 37.618372];
	window.ymap.init(
		[
			[
				'.js-ymap-lazyload',
				function(ymap){
					var myCol = new ymaps.GeoObjectCollection();
					let mapPoints = window.mapPoints;
					let type = ymap.container._parentElement.dataset.type;

					if(type) {
						mapPoints = window.mapPoints[type];
					}

					for(var i = 0; i < mapPoints.length; i++){

						myCol.add(new ymaps.Placemark(
							mapPoints[i].coords,
							mapPoints[i].options[0],
							mapPoints[i].options[1]
						));
					}

					ymap.geoObjects.add(myCol);

					ymap.setBounds(myCol.getBounds());

					if(mapPoints.length==1 && mapPoints[0].zoom) {
						ymap.setZoom(mapPoints[0].zoom);
					} else if(type) {
						ymap.setZoom(mapPoints[0].zoom);
						if(window.innerWidth < 560) {
							ymap.setZoom(9);
						}
					} else {
						ymap.setZoom(ymap.getZoom());
					}

					ymap.controls.remove('searchControl');
					ymap.controls.remove('trafficControl');
					ymap.controls.remove('typeSelector');
					ymap.controls.remove('fullscreenControl');
					ymap.controls.remove('rulerControl');
					ymap.controls.remove('geolocationControl');
					ymap.behaviors.disable('scrollZoom');
					$('.js-map-point').click(function(e){
						e.preventDefault();
						var value = $(this).data('value');

						$('.js-map-point, .map-address__item').removeClass('active');

						if($(this).hasClass('map-address__item')){
							$(this).addClass('active');
						} else {
							$(this).closest('.map-address__item').addClass('active');
						}

						ymaps
							.geoQuery(ymap.geoObjects)
							.search('properties.id != "'+value+'"')
							.each(function(pm) {
								var img = pm.properties.get('iconImages');
								pm.options.set('iconImageHref', img[0]);
								if(pm.balloon.isOpen()) pm.balloon.close();
							});

						ymaps
							.geoQuery(ymap.geoObjects)
							.search('properties.id = "'+value+'"')
							.each(function(pm) {
								var img = pm.properties.get('iconImages');
								pm.options.set('iconImageHref', img[1]);
								pm.options.set('hideIcon', false);
							});

						ymap.setBounds(ymaps
							.geoQuery(ymap.geoObjects)
							.search('properties.id = "'+value+'"').getBounds());
					});

					if($('.map-block__adress-card').length > 0) {
						myCol.events.add('click', function (e) {
							e.preventDefault();
							// Получим ссылку на геообъект, по которому кликнул пользователь.
							var target = e.get('target');
							let id = target.properties._data['id'];
							let card = $(ymap.container._parentElement).parent().find('.map-block__adress-card');
							// Зададим контент боковой панели
							mapPoints.forEach(element => {
								if (element.options[0].id == id) {
									card.addClass('active');
									card.find('.map-block__img img').attr('src', element.content.img);
									card.find('.map-block__btn').attr('href', element.content.link);
									card.find('.map-block__label-time').html(element.content.clock);
									card.find('.map-block__item--metro').html(element.content.mapBlock);

									if(window.innerWidth < 768) {
										$("html, body").animate({
											scrollTop: $($('.map-block.js-active .map-block__adress-card')).offset().top - 180 + "px"
										}, {
											duration: 500,
											easing: "swing"
										});
									}
								}
							});
						});
					}
				}
			]
		]
	);

	$('.map-block__tab-item').click(function() {
		if(!$(this).hasClass('js-active')) {
			let type = $(this).data('name');
			let tabName = $(this).data('tab-id');
			$('.map-block__tab-item').removeClass('js-active');
			$(this).addClass('js-active');
			$('.tabs [name="tab-btn"]').removeAttr("checked");
			$('#'+tabName).attr("checked","checked");
			$('.map-block').removeClass('js-active');
			$('.map-block[data-name="'+type+'"]').addClass('js-active');
		}

	});
});