import $ from 'jquery';

class DeleteInputPlaseholder {
    constructor(inputName){
        this.inputName = inputName;
        this.placeholder = inputName.attr('placeholder');
        this.events();
    }
    
    events() {
        this.inputName.focus(this.deletePlaceholder.bind(this)).blur(this.givePlaceholder.bind(this));
    }
    
    deletePlaceholder() {
        this.inputName.attr('placeholder','');
    }

    givePlaceholder() {
        this.inputName.attr('placeholder',this.placeholder);
    }
}

export default DeleteInputPlaseholder;