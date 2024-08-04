import $ from 'jquery';
import BEM from 'tao-bem';

class News extends BEM.Block {

	static get blockName() {
		return 'b-map';
	}

	onInit() {
		this.$contacts = $(this.$el).find('.b-contacts-list');
		window.ymaps.ready($.proxy(this.initMap, this));
		let that = this;
		$('.b-contacts-list__item a').on('click', function () {
			that.onContactClick($(this).closest('.b-contacts-list__item').data('id'));
		});
	}

	onContactClick(id) {
		$('body').trigger('map.markerSelect.' + id);
	}

	markers() {
		return [
			{
				id: 1,
				coords: [55.81606056892301, 37.511463499999955],
				title: '«СМ-Стоматология»',
				content: 'ул. Космонавта Волкова, 9/2  (м. «Войковская»)',
				link: '<a href="/contacts/sm-stomatologiya-na-ul-kosmonavta-volkova/">Подробнее</a>'
			},
			{
				id: 2,
				coords: [55.8276510689229, 37.514104500000016],
				title: '«СМ-Стоматология»',
				content: 'ул. Клары Цеткин, д. 33 корп. 28 (м. «Войковская»)',
				link: '<a href="/contacts/sm-stomatologiya-na-ul-klary-tsetkin/">Подробнее</a>'
			},
			{
				id: 3,
				coords: [55.81461356891924, 37.64760299999991],
				title: '«СМ-Стоматология»',
				content: 'ул. Ярославская, дом 4, корп. 2 (м. «Алексеевская», м. «ВДНХ»)',
				link: '<a href="/contacts/sm-stomatologiya-na-ul-yaroslavskaya/">Подробнее</a>'
			},
			{
				id: 4,
				coords: [55.82435906891446, 37.51927849999994],
				title: 'Детская стоматология',
				content: 'ул. Приорова, д.36 (м. «Войковская»)',
				link: '<a href="http://www.smdoctor.ru/clinics/sm-doktor-na-ul-priorova-d-36/" target="_blank">Подробнее</a>'
			},
			{
				id: 6,
				coords: [55.708759569004876,37.725073499999915],
				title: 'Детская стоматология',
				content: 'Волгоградский проспект, д.42, стр.12 (м. «Текстильщики», м. «Угрешская»)',
				link: '<a href="http://www.smdoctor.ru/clinics/sm-doktor-na-volgogradskom-pr-te-d-42-str-12/" target="_blank">Подробнее</a>'
			},
			{
				id: 5,
				coords: [55.708759569004876,37.725073499999915],
				title: '«CM-Стоматология»',
				content: 'Волгоградский проспект, д.42, стр.12 (м. «Текстильщики», м. «Угрешская»)',
				link: '<a href="/contacts/sm-stomatologiya-na-volgogradskom-prospekte-vzroslaya/" target="_blank">Подробнее</a>'
			},
			{
				id: 7,
				coords: [55.825689, 37.498105],
				title: '«CM-Стоматология»',
				content: 'Старопетровский проезд, 7А, стр. 22 (м. «Войковская»)',
				link: '<a href="/contacts/sm-stomatologiya-v-staropetrovskom-proezde/" target="_blank">Подробнее</a>'
			},
			{
				id: 8,
				coords: [55.736067, 37.410228],
				title: '«CM-Стоматология»',
				content: 'ул. Ярцевская, д. 8 (м. «Молодежная»)',
				link: '<a href="/contacts/sm-stomatologiya-na-ul-yartsevskaya/" target="_blank">Подробнее</a>'
			},
			{
				id: 9,
				coords: [55.7360673, 37.41022],
				title: 'Детская стоматология',
				content: 'ул. Ярцевская, д. 8 (м. «Молодежная»)',
				link: '<a href="https://www.smdoctor.ru/clinics/detskaya-stomatologiya-ul-yartsevskaya/" target="_blank">Подробнее</a>'
			},
			{
				id: 10,
				coords: [55.8161451, 37.511227],
				title: 'Детская стоматология',
				content: 'ул. Космонавта Волкова, д. 9/2 (м. «Войковская»)',
				link: '<a href="https://www.smdoctor.ru/clinics/klinika-dlya-detey-i-podrostkov-sm-doktor-na-ul-kosmonavta-volkova/" target="_blank">Подробнее</a>'
			},
			{
				id: 11,
				coords: [55.7958635, 37.6110684],
				title: 'Детская стоматология',
				content: '3-й проезд Марьиной Рощи, д. 41 (м. «Марьина Роща»)',
				link: '<a href="/contacts/detskaya-stomatologiya-v-marinoy-roshche-m-marina-roshcha/" target="_blank">Подробнее</a>'
			},
		];
	}

	initMap() {
		this.userPlacemark;

		this.map = new window.ymaps.Map('js-main-map', {
			center: [55.76, 37.84],
			zoom: 10,
			type:	'yandex#publicMap',
			controls: ["fullscreenControl", "routeEditor"]
		}, {
			searchControlProvider: 'yandex#search',
			yandexMapDisablePoiInteractivity: true
		});

		this.map.behaviors.disable('scrollZoom');
		this.map.controls.add('zoomControl',{left:5,top:5});

		this.map.events.add('click', e => {
			if (this.lastRoute) {
				this.map.geoObjects.remove(this.lastRoute);
			}

			let coords = e.get('coords');
			this.user_point_let = coords[0];
			this.user_point_lat = coords[1];
			if (this.userPlacemark) {
				this.userPlacemark.geometry.setCoordinates(coords);
			} else {
				this.userPlacemark = this.createPlacemark(coords)
				this.map.geoObjects.add(this.userPlacemark);
			}
		});

		this.createBalloonObjects();
		this.addMarkers();
	}

	createPlacemark (coords) {
		return new window.ymaps.Placemark(coords, {
			iconCaption: 'Мое местоположение'
		},{
			preset: 'islands#violetDotIconWithCaption',
            draggable: true
		});
	}

	addMarkers() {
		this.markers().forEach(m => {
			let marker = new window.ymaps.Placemark(
				m.coords,
				{title: m.title, content: m.content, link: m.link},
				{
					content: m.content,
					link: m.link,
					balloonLayout: this.balloonLayout,
					balloonContentLayout: this.balloonContentLayoutClass,
					balloonShadow: false,
					// Опции.
					// Необходимо указать данный тип макета.
					iconLayout: 'default#image',
					// Своё изображение иконки метки.
					iconImageHref: '/images/mapMarker.png',
					// Размеры метки.
					iconImageSize: [28, 40],
					// Смещение левого верхнего угла иконки относительно
					// её "ножки" (точки привязки).
					iconImageOffset: [-14, -40]
				}
			);
			marker.events.add('click', () => this.onMarkerSelect(m));
			this.map.geoObjects.add(marker);

			$('body').on('map.markerSelect.' + m.id, ()=> {
				marker.events.fire('click');
			});
		});
	}

	onMarkerSelect(marker) {
		this.selectContactItem(marker.id);
	}

	selectContactItem(id) {
		let $item = $('.b-contacts-list__item--' + parseInt(id));
		if (!$item.length) {
			return;
		}
		$('.b-contacts-list__item--selected').removeClass('b-contacts-list__item--selected');
		$item.addClass('b-contacts-list__item--selected');
	}

	createBalloonObjects() {
		let that = this;
		this.balloonLayout = window.ymaps.templateLayoutFactory.createClass(
			'<div class="mapBalloon">' +
				'<span class="btn-close">x</span>' +
				'<div class="content">' +
					'<div class="map-title">$[properties.title]</div>' +
					'<div class="address">$[properties.content]</div>' +
					'<div class="address">$[properties.link]</div>' +
					'<div class="btn-yandex btn btn-primary">проложить маршрут</div>' +
					'<div class="svg-triangle"></div>' +
				'</div>' +
				'<div class="img"></div>' +
			'</div>'
			, {

				/**
				 * Строит экземпляр макета на основе шаблона и добавляет его в родительский HTML-элемент.
				 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#build
				 * @function
				 * @name build
				 */
				build: function () {
					this.constructor.superclass.build.call(this);

					this._$element = $('.mapBalloon', this.getParentElement());

					this.applyElementOffset();

					let point = this;

					this._$element.find('.btn-yandex').on('click',function(){
						if(!that.user_point_let && !that.user_point_lat) {
							$('#modal-map').modal('show');
						}
						window.ymaps.route([
							[that.user_point_let, that.user_point_lat],
							point.getData().geoObject.geometry.getCoordinates()
						]).then(
							function(route){
								if (that.lastRoute) {
									that.map.geoObjects.remove(that.lastRoute);
								}
								that.lastRoute = route;
								that.map.geoObjects.add(that.lastRoute)
								var points = route.getWayPoints();
								points.options.set('visible',false);
							},
							function(error){
								console.log(error);
							}
						)
					})

					this._$element.find('.btn-close')
						.on('click',$.proxy(this.onCloseClick,this));
				},

				/**
				 * Удаляет содержимое макета из DOM.
				 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/layout.templateBased.Base.xml#clear
				 * @function
				 * @name clear
				 */
				clear: function () {
					this._$element.find('.close')
						.off('click');

					this.constructor.superclass.clear.call(this);
				},

				/**
				 * Метод будет вызван системой шаблонов АПИ при изменении размеров вложенного макета.
				 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
				 * @function
				 * @name onSublayoutSizeChange
				 */
				onSublayoutSizeChange: function () {
					this.constructor.superclass.onSublayoutSizeChange.apply(this, arguments);

					if(!this._isElement(this._$element)) {
						return;
					}

					this.applyElementOffset();

					this.events.fire('shapechange');
				},

				/**
				 * Сдвигаем балун, чтобы "хвостик" указывал на точку привязки.
				 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
				 * @function
				 * @name applyElementOffset
				 */
				applyElementOffset: function () {
					this._$element.css({
						position: 'absolute',
						left:  -129,
						bottom: 37
					});
				},

				/**
				 * Закрывает балун при клике на крестик, кидая событие "userclose" на макете.
				 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/IBalloonLayout.xml#event-userclose
				 * @function
				 * @name onCloseClick
				 */
				onCloseClick: function (e) {
					e.preventDefault();

					this.events.fire('userclose');
				},

				/**applyElementOffset: function () {
					this._$element.css({
						position: 'absolute',
						left: - 30,
						top: - 80
					});
				},

				 * Используется для автопозиционирования (balloonAutoPan).
				 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/ILayout.xml#getClientBounds
				 * @function
				 * @name getClientBounds
				 * @returns {Number[][]} Координаты левого верхнего и правого нижнего углов шаблона относительно точки привязки.
				 */
				getShape: function () {

					// if(!this._isElement(this._$element)) {
                    //     return that.balloonLayout.superclass.getShape.call(this);
                    // }

					//var position = this._$element.position();
					var position = {left: -129, top: -150};
					//console.log(this._$element.position());

					return new window.ymaps.shape.Rectangle(new window.ymaps.geometry.pixel.Rectangle([
						[position.left, position.top - 35], [
							position.left + this._$element[0].offsetWidth,
							position.top + this._$element[0].offsetHeight + this._$element.find('.svg-triangle')[0].offsetHeight
						]
					]));
				},

				/**
				 * Проверяем наличие элемента (в ИЕ и Опере его еще может не быть).
				 * @function
				 * @private
				 * @name _isElement
				 * @param {jQuery} [element] Элемент.
				 * @returns {Boolean} Флаг наличия.
				 */
				_isElement: function (element) {
					return element && element[0] && element.find('.arrow')[0];
				}
			}
		);

		that.balloonContentLayoutClass = window.ymaps.templateLayoutFactory.createClass();
	}

	static get forced() {
		return true;
	}
}

News.register();

export default News;
