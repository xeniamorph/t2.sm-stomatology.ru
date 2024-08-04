"use strict";
// Can also be included with a regular script tag
//import Typed from 'typed.js';
//import { ymapLoader } from '../utils';
//var $ = require( "jquery" );

import { ymapLazyload } from '@utils/ymap-lazyload';

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

                    for(var i = 0; i < window.mapPoints.length; i++){
                    	
                        myCol.add(new ymaps.Placemark(
                            window.mapPoints[i].coords,
                            window.mapPoints[i].options[0],
                            window.mapPoints[i].options[1]
                        ));
                    }

                    ymap.geoObjects.add(myCol);

                    ymap.setBounds(myCol.getBounds());
                    ymap.setZoom(ymap.getZoom());

	                //ymap.controls.remove('zoomControl');

	               /* ymap.controls.add('zoomControl', {
	                	float: 'none',
				        position: {
				        	top: 50,
				        	right: 10
				        }
	                });
	                */
	                ymap.controls.remove('searchControl');
	                ymap.controls.remove('trafficControl');
	                ymap.controls.remove('typeSelector');
	                ymap.controls.remove('fullscreenControl');
	                ymap.controls.remove('rulerControl');
	                ymap.controls.remove('geolocationControl');
	                ymap.behaviors.disable('scrollZoom');
				
/*					if($('.js-map-deps.active').length){
						
	                	ymaps
	                		.geoQuery(ymap.geoObjects)
	                		.search('properties.departament != "'+$('.js-map-deps.active').data('value')+'"')
	                		.setOptions({"visible": false});
					}*/



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
	                    ymap.setZoom(14);

/*	                    if(!$('.map-block__left').hasClass('hide')){
	                    	$('.map-block__left').addClass('hide');
	                    }*/
	                });

/*	                $('.js-map-deps').click(function(e){
	                	e.preventDefault();
	                	var value = $(this).data('value');

	                	ymaps
	                		.geoQuery(ymap.geoObjects)
	                		.search('properties.departament != "'+value+'"')
	                		.each(function(pm) {
	                			var img = pm.properties.get('iconImages');
	                			pm.options.set('iconImageHref', img[0]);
	                			pm.options.set('visible', false);
	                			if(pm.balloon.isOpen()) pm.balloon.close();
							});

	                	ymaps
	                		.geoQuery(ymap.geoObjects)
	                		.search('properties.departament = "'+value+'"')
	                		.each(function(pm) {
	                			var img = pm.properties.get('iconImages');
	                			pm.options.set('iconImageHref', img[0]);
	                			pm.options.set('visible', true);
	                			if(pm.balloon.isOpen()) pm.balloon.close();
							});

	                    ymap.setBounds(ymaps
	                		.geoQuery(ymap.geoObjects)
	                		.search('properties.departament = "'+value+'"').getBounds(), {checkZoomRange:true});
	                    
	                    if(!$('.map-block__left').hasClass('hide')){
	                    	$('.map-block__left').addClass('hide');
	                    }

	                });*/


/*					$('.js-map-tab-toggle').click(function(e){
						e.preventDefault();

						var indx = $(this).index();

						$(this)
							.closest('.js-map-tab-container')
							.find('.js-map-tab')
							.removeClass('active')
							.eq(indx)
							.addClass('active');

						$(this)
							.closest('.js-map-tab-container')
							.find('.js-map-tab-toggle')
							.removeClass('active')
							.eq(indx)
							.addClass('active');

						$(this).closest('.map-block').find('.map-block__left').removeClass('hide');
					});

					$('.js-map-block-toggle').click(function(){
						if($(this).closest('.map-block__left').hasClass('hide')){
							$(this).closest('.map-block__left').removeClass('hide');
						} else {
							$(this).closest('.map-block__left').addClass('hide');	
						}
					});*/
				}
			]
		]
	);
});