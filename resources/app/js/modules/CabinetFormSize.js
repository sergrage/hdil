import $ from 'jquery';

class CabinetFormSize {
    constructor(){
        this.cabinetBTN = $(".cabinetBTN");
        this.init();
        this.events();
    }
    
    events() {
    	// обрабатывает клик для перехода к полному меню и обратно
    	this.cabinetBTN.click(this.toggleMenufull);
    }

	init(){
    	// Check browser support
		if (typeof(Storage) != "undefined") {
			if(localStorage.getItem("HDILCabinetMenu") === null) {
    			localStorage.setItem("HDILCabinetMenu", 'half')
    		}

	    	if(localStorage.getItem("HDILCabinetMenu") == 'full') {
	    		$(".cabinet-news").toggleClass("d-none");
	    		$(".fullBTN").toggleClass("disabled");
	    		$(".halfBTN").toggleClass("disabled");
	    		$(".cabinet-content__form-wrapper").toggleClass("col-lg-6 col-lg-12");
	    	}
		} else {
    		$(".halfBTN").addClass("disabled");
    		$(".fullBTN").addClass("disabled");
		}
	}
  
    toggleMenufull() {

    	if(!$(this).hasClass("disabled")){
    		$(".cabinet-news").toggleClass("d-none");
    		$(".fullBTN").toggleClass("disabled");
    		$(".halfBTN").toggleClass("disabled");
    		$(".cabinet-content__form-wrapper").toggleClass("col-lg-6 col-lg-12");
    	}

    	if(localStorage.getItem("HDILCabinetMenu") == 'half') {
			localStorage.setItem("HDILCabinetMenu", 'full');
		} else {
			localStorage.setItem("HDILCabinetMenu", 'half');
		}
	  }
}

export default CabinetFormSize;

// $("input").attr("disabled", true);