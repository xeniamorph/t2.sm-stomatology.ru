$(function(){
	if(!$('.js-form-search__doctor').length) return;
	
	searchFromText = new SearchFromText({
		listDoctor : doctorList,
		listClinic : clinicList,
		input : '.js-form-search__doctor',
		select : '.js-form-search__clinic',
		resultBlock: '.js-form-search__result'
	})
});

var SearchFromText = function(args) {
	var that = this instanceof SearchFromText ?
		this :
		Object.create(SearchFromText);

	that.listDoctor = args.listDoctor;
	that.listClinic = args.listClinic;

	that.input = $(args.input);
	that.select = $(args.select);

	that.resultBlock = $(args.resultBlock);
	that.startListHtml = that.resultBlock.html()

	that.clinicId = 0;

	that.currentList = [] ;
	that.name = '';


	that.input.on('keyup',function(e){
		if(e.shiftKey || e.ctrlKey){
			return false;
		}
		that.search($(this).val());
	});
	
	if(location.hash) {
		var clinic_option_id = $('.js-form-search__clinic option[data-code="'+location.hash.slice(1)+'"]').val();
		if(clinic_option_id) {
			$('.js-form-search__clinic [value="'+clinic_option_id+'"').attr('selected', 'selected');
			that.clinicId = clinic_option_id;
			idList = that.searchInList();
			that.render(idList);
		}
	}

	that.select.on('change',function(){
		if($(this).val()) {
			that.clinicId = $(this).val();
			// for(var id in clinicList) {
			// 	if (id == clinicId){
			// 		that.clinicId = id;
			// 		doctorIdList = that.listClinic[id]['docList'];
			// 	}
			// }
			// that.render(doctorIdList);
		}else{
			that.clinicId = 0;
			//that.resultBlock.html(that.startListHtml);
		}
		idList = that.searchInList();
		that.render(idList);
	});
}

SearchFromText.prototype.search = function(str) {
	var that = this;
	if(str.length > that.name.length) {
		that.name = str;
		idList = that.searchInList();
		that.render(idList);
		//that.searchIncurrentList()
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
			that.render(that.listClinic[that.clinicId]['docList']);
		}else{
			that.resultBlock.html(that.startListHtml);
		}
	}
}

SearchFromText.prototype.searchInList = function() {
	var that = this;
	that.currentList = [];

	if(that.clinicId > 0) {
		if(that.listClinic[that.clinicId]){
			var docIdList = that.listClinic[that.clinicId]['docList'];
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
	str = '';
	for(var id in idList) {
		var doctor = that.listDoctor[idList[id]];
		str += '' +
			'<div class="col-sm-4">' + 
				'<div class="b-card b-card--doctor">' + 
					'<a href="'+ doctor.link +'" class="b-card__img db"><img src="'+ doctor.img +'" alt="'+ doctor.name +' фото" title="'+ doctor.name +'"></a>' + 
					'<a href="'+ doctor.link +'" class="b-card__title db">' + 
						doctor.name + 
					'</a>' + 
					'<a href="'+ doctor.link +'" class="b-card__sub db">' + 
						doctor.specialization + 
					'</a>' + 
					'<div class="b-card__btn-panel">' +
						'<a href="#" class="btn btn--doctor btn-primary" data-toggle="modal" data-target="#modal-feedback">Записаться на прием</a>' +
						'<a href="#" class="btn btn--doctor btn-secondary" data-toggle="modal" data-target="#modal-review">Оставить отзыв</a>' +
					'</div>' +
				'</div>' + 
			'</div>';  
	}
	that.resultBlock.html(str);
}
