// $(document).ready(function(){  

require('./bootstrap');
require('croppie');
require('@ckeditor/ckeditor5-build-classic');

//--------------------------------------------------------
// Classes
//--------------------------------------------------------

import MobileMenu from './modules/MobileMenu';
var mobileMenuGuest = new MobileMenu();

import DeleteInputPlaseholder from './modules/DeleteInputPlaseholder';
var headerSearch = new DeleteInputPlaseholder($(".header__form_input"));

import CabinetFormSize from './modules/CabinetFormSize';
var cabinetMenuToggle = new CabinetFormSize();


import ClassicEditor from '@ckeditor/ckeditor5-build-classic/build/ckeditor';

ClassicEditor
.create( document.querySelector( '#editor' ), {
  placeholder: 'Type the content here!' })
.then( editor => {
    // console.log( editor );
})
.catch( error => {
    console.error( error );
});




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


// Check browser support
// if (typeof(Storage) != "undefined") {
//     // Store
//     localStorage.setItem("toggleState", value);
//     // Retrieve
//     localStorage.getItem("toggleState");
// } else {
//     "Sorry, your browser does not support Web Storage...";
// }


$('#dropdownMenuButton').on('click', function (event) {
    $('.dropdown-menu').toggleClass('show cabinet-content__challenge-open');
});
