// $(document).ready(function(){  
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

require('croppie');


// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const app = new Vue({
//     el: '#app'
// });

//--------------------------------------------------------
// вернуть/развернцть карточку в cabinet(личном кабинете)


// $('.card-head > span').click(function(){
//     $(this).parent().parent().toggleClass('collapsed');
//     $(this).parent().parent().find('.card-body').slideToggle();
// });

//--------------------------------------------------------
// автоматически добавляет поле формы skill в profile
    
  // var postURL = "<?php echo url('addmore'); ?>";
  // var i=1;  


  // $('#add').click(function(){  
  //      i++;  
  //      $('#dynamic_field')
  //      .append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" autocomplete="off" name="skills[]" placeholder="Enter your Skill" class="form-control skills_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
  // });  


  // $(document).on('click', '.btn_remove', function(){  

  //      var button_id = $(this).attr("id");
  //      console.log(button_id);   
  //      $('#row'+button_id+'').remove();
  //      i--;  
  // });  


$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var bootstrapColors = [
    'badge-primary',
    'badge-secondary',
    'badge-success',
    'badge-danger',
    'badge-warning',
    'badge-info',
    'badge-light',
    'badge-dark',
];

// var skillList = [];

$('#add').click(function(){
  var item = bootstrapColors[Math.floor(Math.random()*bootstrapColors.length)];  
  var skill = $('#addSkill').val();

  // skillList.push(skill);

  // console.log(skillList);

  if(skill) {
      $('#dynamic_field')
      .append('<span class="badge ' +item+' m-1" id="'+item+'">'+skill+' <i class="fas fa-minus-square p-1"></i><input type="hidden" name="skills[]" value="'+skill+'"></span>');
      $('#addSkill').val('');  
  }
}); 

$(document).on('click', '.badge', function(){

  // var index = skillList.indexOf($(this).text().trim());

  // if(index > -1) {
  //   skillList.splice(index, 1);
  // }
  // console.log(skillList);
  $(this).remove();

});  

// $(function() {
//     var Accordion = function(el, multiple) {
//     this.el = el || {};
//     this.multiple = multiple || false;

//     // Variables privadas
//     var links = this.el.find('.link');
//     // Evento
//     links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
//   }

//   Accordion.prototype.dropdown = function(e) {
//     var $el = e.data.el;
//       $this = $(this),
//       $next = $this.next();

//     $next.slideToggle();
//     $this.parent().toggleClass('open');

//     if (!e.data.multiple) {
//       $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
//     };
//   } 

//   var accordion = new Accordion($('#accordion'), false);
// });
