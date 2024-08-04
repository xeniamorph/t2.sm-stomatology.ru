$(function(){
	searchFromText = new SearchFromText({
		listDoctor : doctorList,
		listMetro : metroList,
		listCategory : specialityList,
		input : '.js-form-search__doctor',
		select : '.js-form-search__clinic',
		selectSpec : '.js-form-search__spec',
		resultBlock: '.js-form-search__result',
		resultButton: '.js-form-search__submit'
	})
});

var SearchFromText = function(args) {
	var that = this instanceof SearchFromText ?
		this :
		Object.create(SearchFromText);

	that.listDoctor = args.listDoctor;
	that.listMetro = args.listMetro;
	that.listCategory = args.listCategory;

	that.input = $(args.input);
	that.select = $(args.select);
	that.selectSpec = $(args.selectSpec);

	that.resultBlock = $(args.resultBlock);
	that.startListHtml = that.resultBlock.html()

	that.resultButton = $(args.resultButton);

	that.clinicId = 0;
	that.specId = 0;

	that.currentList = [] ;
	that.name = '';
	
	if(location.hash) {
		var clinic_option_id = $('.js-form-search__clinic option[data-code="'+location.hash.slice(1)+'"]').val();
		if(clinic_option_id) {
			$('.js-form-search__clinic [value="'+clinic_option_id+'"').attr('selected', 'selected');
			that.clinicId = clinic_option_id;
			idList = that.searchInList();
			that.render(idList);
		}
	}

	that.resultButton.on('click',function(e){
		e.preventDefault();
		let idList = [];

		if(that.select.val() && that.select.val()!=0) {
			that.clinicId = that.select.val();
		}else{
			that.clinicId = 0;
		}

		that.name = that.input.val();

		if(that.selectSpec.val() && that.selectSpec.val()!=0) {
			that.specId = that.selectSpec.val();
		}else{
			that.specId = 0;
		}

		let idListMetro = that.searchInList();
		let idListSpec = that.searchInListSpec();

		if(that.selectSpec.val()== 0 && that.select.val()== 0 && that.name == '') {
			that.resultBlock.html(that.startListHtml);
			$('.m-doctors__show').removeClass('hide');
		} else {
			for(var id in idListMetro) {
				if(idListSpec.includes(idListMetro[id]) != false ) {
					idList.push(idListMetro[id]);
				}
			}
			that.render(idList);
		}
	});
}

SearchFromText.prototype.search = function(str) {
	var that = this;
	if(str.length > that.name.length) {
		that.name = str;
		let idList = that.searchInList();
		that.render(idList);
		return;
	}
	if(str.length < that.name.length && str.length > 0) {
		that.name = str;
		idList = that.searchInList()
		that.render(idList);
		return;
	}
	that.name = str;
	if(that.name == '') {
		if(that.clinicId > 0){
			that.render(that.listMetro[that.clinicId]['docList']);
		}else{
			that.resultBlock.html(that.startListHtml);
			$('.m-doctors__show').removeClass('hide');
		}
	}
}

SearchFromText.prototype.searchInList = function() {
	var that = this;
	that.currentList = [];
	if(that.clinicId > 0) {
		if(that.listMetro[that.clinicId]){
			var docIdList = that.listMetro[that.clinicId]['docList'];
			for(var id in docIdList) {
				if(that.listDoctor[docIdList[id]].name.toLowerCase().indexOf(that.name.toLowerCase()) > -1) {
					that.currentList.push(docIdList[id]);
				}
			}
		}
	}else{
		for(var id in that.listDoctor) {
			if(that.listDoctor[id].name.toLowerCase().indexOf(that.name.toLowerCase()) > -1) {
				that.currentList.push(id);
			}
		}
	}
	return that.currentList;
}

SearchFromText.prototype.searchInListSpec = function() {
	var that = this;
	that.currentList = [];
	if(that.specId > 0) {
		if(that.listCategory[that.specId]){
			var docIdList = that.listCategory[that.specId]['docList'];
			for(var id in docIdList) {
				if(that.listDoctor[docIdList[id]].name.toLowerCase().indexOf(that.name.toLowerCase()) > -1) {
					that.currentList.push(docIdList[id]);
				}
			}
		}
	}else{
		for(var id in that.listDoctor) {
			if(that.listDoctor[id].name.toLowerCase().indexOf(that.name.toLowerCase()) > -1) {
				that.currentList.push(id);
			}
		}
	}
	return that.currentList;
}

SearchFromText.prototype.render = function(idList) {
	var that = this;
	let str = '';

	for(var id in idList) {
		var doctor = that.listDoctor[idList[id]];
		let metroStr = '';
		for(var metro in doctor.metroList) {
			metroStr+= '<div class="doctor-card__metro"><div class="doctor-card__point metro_'+ doctor.metroList[metro].color +'"></div><div>'+ doctor.metroList[metro].title +'</div></div>';
		}
		str += '' +
			'<div class="doctor-card">' +
				'<div class="b-card b-card--doctor">' + 
					'<a href="'+ doctor.link +'" class="doctor-card__cell"><div class="doctor-card__left"><img class="doctor-card__image" src="'+ doctor.img +'" alt="'+ doctor.name +' фото" title="'+ doctor.name +'"></div>' +
					'<div class="doctor-card__right"><div class="doctor-card__name">' +
						doctor.name + 
					'</div>' +
					'<div class="doctor-card__spec">' +
						doctor.specialization + 
					'</div></div></a>' +
					'<div class="doctor-card__cell doctor-card__cell--middle">' +
					'<div class="doctor-card__left">' +
					(doctor.experience ? '<div class="doctor-card__text">'+ doctor.experience +'</div>':'') +
					(doctor.reviews ? '<div class="doctor-card__text">'+ doctor.reviews +'</div>' : '') +
					'</div>' +
					'<div class="doctor-card__right">' + metroStr + '</div>' +
					'</div>' +
					'<div class="doctor-card__button">' +
						'<a href="#" class="btn btn--doctor btn-primary js-open-popup" data-target=".popup-form-feedback" data-analytics="OrderDoctor_Toolbar">Записаться на прием</a>'+
					'</div>' +
				'</div>' + 
			'</div>';  
	}

	$('.m-doctors__show').addClass('hide');

	if(str == '') {
		$('.m-doctors__empty').removeClass('hide');
	} else {
		$('.m-doctors__empty').addClass('hide');
	}
	that.resultBlock.html(str);
}
