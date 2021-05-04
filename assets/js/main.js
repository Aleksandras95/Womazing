(function ($)
  { "use strict"
    // $('.offer').slick({
    //     autoplay: true,
    //     autoplaySpeed: 3000,
    // });
    $('.team').slick({
      autoplay: true,
      autoplaySpeed: 3000,
    });
    $('.image-bg__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.offer'
    });
    $('.offer').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: '.image-bg__slider',
      autoplay: true,
      autoplaySpeed: 3000,
    });
    /**
   * Header fixed top on scroll
   */
  $(document).ready(function(){       
    var scroll_pos = 0;
    $(document).scroll(function() { 
        scroll_pos = $(this).scrollTop();
        if(scroll_pos > 110) {
            $('.header').addClass('nav-scrolled');
        } else {
            $('.header').removeClass('nav-scrolled');
        }
    });
});
//Modal
$('#callback-open').on('click', function () {
  $('.modal-wrapper, .modal-window').fadeIn();
});
$('#callback-open-footer').on('click', function () {
  $('.modal-wrapper, .modal-window').fadeIn();
});
$('.modal-wrapper').on('click', function () {
  $(this).fadeOut();
  $(this).children().fadeOut();
});
$('#btn-close').on('click', function () {
  $('.modal-wrapper').fadeOut();
})
$('#thanks-btn-close').on('click', function () {
  $('.modal-wrapper').fadeOut();
})
$('.modal-wrapper').children().on('click', function(e) {
  e.stopPropagation();
})
//Validate

$('[data-submit]').on('click', function(e) {
  e.preventDefault();
  $(this).parent('form').submit();
})
$.validator.addMethod("regex", function(value, element, regexp) {
  var re = new RegExp(regexp);
  return this.optional(element) || re.test(value);
},
"Please check your input."
);

function valEl(el) {
  el.validate({
    rules : {
      name : {
        required : true,
        regex : "[A-Za-z]"
      },
      email : {
        required : true
      },
      phone : {
        required : true,
        minlength : 9,
        maxlength : 12,
        regex : "[0-9]+"
      }
    },
    messages : {
      name : {
        required : 'Field is required',
        regex : 'Enter your name properly'
      },
      email : {
        required : 'Field is required',
        regex : 'Enter your email properly'
      },
      phone : {
        required : 'Field is required',
        regex : 'Enter your phone number properly'
      }
    },

    submitHandler : function(form) {
      let $form = $(form);
      let $formId = $(form).attr('id');
      switch ($formId) {
        case 'modalForm' :
          $.ajax({
            type: 'POST',
            url: $form.attr('action'),
            data: $form.serialize()
          })
          .done(function(){
            console.log('Success');
          })
          .fail(function() {
            console.log('Fail');
          })
          .always(function() {
            setTimeout(function () {
              $form.trigger('reset');
              $('.modal-window').fadeOut();
            }, 1000);
            setTimeout( function(){
              $('.modal-wrapper, .thanks-window').fadeIn();
            }, 1400);
          });
          break;
          case 'mainForm':
            $.ajax({
              type: 'POST',
              url: $form.attr('action'),
              data: $form.serialize()
            })
            .done(function(){
              console.log('Success');
            })
            .fail(function() {
              console.log('Fail');
            })
            .always(function() {
              console.log('Always');
              setTimeout( function(){
                $form.trigger('reset');
              }, 1000);
              setTimeout( function(){
                $('.form-thanks').fadeIn();
              }, 1400);
            });
            break;
      }
      return false;
    }
  })
};
$('.php-email-form').each(function(){
  valEl($(this));
});
//Menu-mobile
$('#menu-mobile-open').on('click', function () {
  $('.menu-mobile').fadeIn();
});
$('#close-nav-menu').on('click', function () {
  $('.menu-mobile').fadeOut();
});
})(jQuery);