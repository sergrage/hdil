import $ from 'jquery';

class AddSkill {
    constructor(){
        this.addButton = $("#add");
        this.addInput = $("#addSkill");
        this.dynamicField = $("#dynamic_field");
        this.bootstrapColors = [
            'badge-primary',
            'badge-secondary',
            'badge-success',
            'badge-danger',
            'badge-warning',
            'badge-info',
            'badge-light',
            'badge-dark',
        ];
        this.skill = $('#dynamic_field >span.badge');
        this.document = $(document);

        this.events();
    }
    
    events() {
        this.addButton.click(this.addSkill.bind(this));
        // this.document.on('click', this.skill, function(){
        //     console.log(this.skill);
        //     this.skill.remove();
        // });
    }
    
    addSkill() {
        var item = this.bootstrapColors[Math.floor(Math.random()*this.bootstrapColors.length)];  
        var skill = this.addInput.val();
        if(skill) {
            this.dynamicField
            .append('<span class="badge ' +item+' m-1" id="'+item+'">'+skill+' <i class="fas fa-minus-square p-1"></i><input type="hidden" name="skills[]" value="'+skill+'"></span>');
            this.addInput.val('');  
        }
    }

    // deleteSkill(){
        
    // }
}

export default AddSkill;