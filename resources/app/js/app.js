// $(document).ready(function(){  

require('./bootstrap');
require('croppie');


//--------------------------------------------------------
// Classes
//--------------------------------------------------------

import MobileMenu from './modules/MobileMenu';
var mobileMenuGuest = new MobileMenu();

import DeleteInputPlaseholder from './modules/DeleteInputPlaseholder';
var headerSearch = new DeleteInputPlaseholder($(".header__form_input"));

import CabinetFormSize from './modules/CabinetFormSize';
var cabinetMenuToggle = new CabinetFormSize();

import Tooltip from './modules/Tooltip';
var tooltip = new Tooltip();

import AddSkill from './modules/AddSkill';
var sddSkill = new AddSkill();

$(document).on('click', '#dynamic_field >span.badge', function(){
  $(this).remove();
});  

//--------------------------------------------------------
// вернуть/развернцть карточку в cabinet(личном кабинете)


// $('.card-head > span').click(function(){
//     $(this).parent().parent().toggleClass('collapsed');
//     $(this).parent().parent().find('.card-body').slideToggle();
// });

$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$('#dropdownMenuButtonChallenge').on('click', function (event) {
    $('#dropdown-menu-challenge').toggleClass('show cabinet-content__challenge-open');
});

$('#friendRadios').on('change', function() {
  $('.cabinet-content__challenge-email').slideDown("slow");
   $('#challengeEmailInput').prop("disabled", false);
});

$('#communityRadios').on('change', function() {
   $('.cabinet-content__challenge-email').slideUp("slow");
   $('#challengeEmailInput').prop("disabled", true);
});

