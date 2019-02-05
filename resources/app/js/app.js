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


    
  var postURL = "<?php echo url('addmore'); ?>";
  var i=1;  


  $('#add').click(function(){  
       i++;  
       $('#dynamic_field')
       .append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="skills[]" placeholder="Enter your Skill" class="form-control skills_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
  });  


  $(document).on('click', '.btn_remove', function(){  

       var button_id = $(this).attr("id");
       console.log(button_id);   
       $('#row'+button_id+'').remove();
       i--;  
  });  


  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });


  // $('#submit').click(function(){            
  //      $.ajax({  
  //           url:postURL,  
  //           method:"POST",  
  //           data:$('#add_skill').serialize(),
  //           type:'json',
  //           success:function(data)  
  //           {
  //               if(data.error){
  //                   printErrorMsg(data.error);
  //               }else{
  //                   i=1;
  //                   $('.dynamic-added').remove();
  //                   $('#add_name')[0].reset();
  //                   $(".print-success-msg").find("ul").html('');
  //                   $(".print-success-msg").css('display','block');
  //                   $(".print-error-msg").css('display','none');
  //                   $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
  //               }
  //           }  
  //      });  
  // });  


  // function printErrorMsg (msg) {
  //    $(".print-error-msg").find("ul").html('');
  //    $(".print-error-msg").css('display','block');
  //    $(".print-success-msg").css('display','none');
  //    $.each( msg, function( key, value ) {
  //       $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
  //    });
  // }
// }); 