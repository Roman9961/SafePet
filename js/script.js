//LOADER/SPINNER
$(window).bind("load", function() {

    "use strict";
    
    $(".spn_hol").fadeOut(1000);
});


//MENU APPEAR AND HIDE
$(document).ready(function() {

    "use strict";
    
    $(window).scroll(function() {

        "use strict";
        
        if ($(window).scrollTop() > 80) {
            $(".navbar").css({
                'margin-top': '0px',
                'opacity': '1'
            })
            $(".navbar-nav>li>a").css({
                'padding-top': '15px',
            });
            $(".navbar-brand img").css({
                'height': '35px'
            });
            $(".navbar-brand img").css({
                'padding-top': '0px'
            });
            $(".navbar-default").css({
                'background-color': 'rgba(59, 59, 59, 0.7)'
            });
        } else {
            $(".navbar").css({
                'margin-top': '-100px',
                'opacity': '0'
            })
            $(".navbar-nav>li>a").css({
                'padding-top': '45px'
            });
            $(".navbar-brand img").css({
                'height': '45px'
            });
            $(".navbar-brand img").css({
                'padding-top': '20px'
            });
            $(".navbar-default").css({
                'background-color': 'rgba(59, 59, 59, 0)'
            });
        }
    });
});




 // MENU SECTION ACTIVE
$(document).ready(function() {

    "use strict";
    
    $(".navbar-nav li a").click(function() {

        "use strict";
        
        $(".navbar-nav li a").parent().removeClass("active");
        $(this).parent().addClass("active");
    });
});



// Hilight MENU on SCROLl

$(document).ready(function() {

    "use strict";
    
    $(window).scroll(function() {

        "use strict";
        
        $(".page").each(function() {

            "use strict";
            
            var bb = $(this).attr("id");
            var hei = $(this).outerHeight();
            var grttop = $(this).offset().top - 70;
            if ($(window).scrollTop() > grttop - 1 && $(window).scrollTop() < grttop + hei - 1) {
                var uu = $(".navbar-nav li a[href='#" + bb + "']").parent().addClass("active");
            } else {
                var uu = $(".navbar-nav li a[href='#" + bb + "']").parent().removeClass("active");
            }
        });
    });
});



//SMOOTH MENU SCROOL


$(function() {
	
	"use strict";

  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});



// FIX HOME SCREEN HEIGHT
$(document).ready(function() {

    "use strict";
    
    setInterval(function() {

        "use strict";
        
        var widnowHeight = $(window).height();
        var containerHeight = $(".home-container").height();
        var padTop = widnowHeight - containerHeight;
        $(".home-container").css({
            'padding-top': Math.round(padTop / 4) + 'px',
            'padding-bottom': Math.round(padTop / 2) + 'px'
        });
    }, 10)
});



//PARALLAX
$(document).ready(function() {

    "use strict";
    
    $(window).bind('load', function() {
        "use strict";
        parallaxInit();
    });

    function parallaxInit() {
        "use strict";
        // $('.home-parallax').parallax("30%", 0.1);
        $('.subscribe-parallax').parallax("30%", 0.1);
        $('.testimonial').parallax("10%", 1);
        /*add as necessary*/
    }
});



//OWL CAROSEL
$(document).ready(function() {

    "use strict";

    $("#owl-demo").owlCarousel({
        // autoplay:true,
        autoplayTimeout: 3000,
        loop: true,
        dots:true,
        items: 3, //10 items above 1000px browser width
        responsive: {
            0: {
                items: 1
            },
            900: {
                items: 2
            },
            1280: {
                items: 3
            }
        }
    });
});


    
 //PRETTYPHOTO

$(document).ready(function() {

    "use strict";

    $("a[rel^='prettyPhoto']").prettyPhoto({
        show_title: false,
        default_width: 5000,
        default_height: 5000,
        /* true/false */
    });
});



//WOW JS
$(document).ready(function() {

    "use strict";
 
    new WOW().init();
});



//RESPONSIVE VIDEO
$(document).ready(function() {

    "use strict";
    
    // Basic FitVids Test
    $(".video").fitVids();
});



//CONTACT FORM VALIDATION
$(document).ready(function() {

    "use strict";
    var openPopup = function (selector) {
        $.magnificPopup.open({
            items: {
                src:  selector,
            },
            type:'inline',
            callbacks: {
                open: function () {
                    $('.mfp-content').addClass('animated bounceIn');
                }
            }
        });
    };
    $(".form_submit").click(function() {

        "use strict";
        var recaptcha = $("#g-recaptcha-response").first().val();

        if (recaptcha === "") {
            event.preventDefault();
            $(".form_error .recaptcha_val_error").addClass("show").removeClass("hide");
            openPopup($(".form_error"));
            return false;
        }else{
            $(".form_error .recaptcha_val_error").addClass("hide").removeClass("show");
        }

        var name = $("#name").val();
        var emaild = $("#email").val();
        var phone = $("#phone").val();
        var phoneQuick = $("#phone_quick").val();
        var pay = $("#sel1").val();
        var color = $("#color").val();
        var size = $("#size").val();
        var quickOrder = $("#quick_form").val() == 'quick_order';
        var petName = $("#petName").val();
        var message = $("#message").val();
        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var button =$(this);
        if(phoneQuick){
            phone = phoneQuick;
        }
        console.log(quickOrder);
        if (!name&&!quickOrder) {
            $(".form_error .name_error").addClass("show").removeClass("hide");
            openPopup($(".form_error"));
            return false;
        } else {
            $(".form_error .name_error").addClass("hide").removeClass("show");
        }
        if (!emaild&&!quickOrder) {
            $(".form_error .email_error").addClass("show").removeClass("hide");
            openPopup($(".form_error"));
            return false;
        } else {
            $(".form_error .email_error").addClass("hide").removeClass("show");
            if (testEmail.test(emaild) || quickOrder) {
                $(".form_error .email_val_error").addClass("hide").removeClass("show");
            } else {
                $(".form_error .email_val_error").addClass("show").removeClass("hide");
                openPopup($(".form_error"));
                return false;
            }
        }
        if (!phone) {
            if(quickOrder){
                $(".form_error .phone_error_quick_order").addClass("show").removeClass("hide");
            }else{
                $(".form_error .phone_error").addClass("show").removeClass("hide");
            }
            openPopup($(".form_error"));
            return false;
        } else {
            $(".form_error .phone_error").addClass("hide").removeClass("show");
            $(".form_error .phone_error_quick_order").addClass("hide").removeClass("show");
        }
        if (!petName&&!quickOrder) {
            $(".form_error .pet_name_error").addClass("show").removeClass("hide");
            openPopup($(".form_error"));
            return false;
        } else {
            $(".form_error .pet_name_error").addClass("hide").removeClass("show");
        }

        if ((quickOrder && phone) || (!quickOrder&& name && emaild && petName && phone)) {
            button.attr('disabled', true);
            openPopup($(".mail-loader"));
            var data = {
                name,
                mail: emaild,
                petName,
                pay,
                phone,
                color,
                size,
                messageForm: message
            };
            if(quickOrder){
                data = {
                    phone,
                    quickOrder
                };
            }
            $.ajax({
                url: 'contact.php',
                data: data,
                type: 'POST',
                success: function(data) {
                    console.log(data);
                    fbq('trackCustom', 'Buy');
                    gtag('event', 'Buy', {'event_category': 'buy'});
                    button.attr('disabled', false);
                    if(quickOrder){
                        $(".Sucess").html("<i class='fa fa-check'></i> Спасибо за размещение заявки, ожидайте, скоро с Вами свяжутся для уточнения деталей.");
                    }else {
                        $(".Sucess").html("<i class='fa fa-check'></i> Уважаемый <b>" + name + "</b> Спасибо за размещение заказа, мы отправили вам письмо-подтверждение на электронную почту.");
                    }
                    $("#Name").val("");
                    $("#Email").val("");
                    $("#Subject").val("");
                    $("#Message").val("");
                    $(".form_error .name_error, .form_error .email_error, .form_error .email_val_error, .form_error .message_error, .form_error .recaptcha_val_error").addClass("hide").removeClass("show");
                    $("#name").val("");
                    $("#email").val("");
                    $("#subject").val("");
                    $("#message").val("");
                    openPopup($(".Sucess"));
                }
            });
        }
        return false;
    });
});


 
/// SMOOTH SCROLL           

$(document).ready(function() {

    "use strict";
    
    var scrollAnimationTime = 1200,
        scrollAnimation = 'easeInOutExpo';
    $('a.scrollto').bind('click.smoothscroll', function(event) {
        event.preventDefault();
        var target = this.hash;
        $('html, body').stop().animate({
            'scrollTop': $(target).offset().top
        }, scrollAnimationTime, scrollAnimation, function() {
            window.location.hash = target;
        });
    });
    //COUNTER
    $('.counter_num').counterUp({
        delay: 10,
        time: 2000
    });
});

$(document).ready(function() {

        "use strict";

    $('.open-popup-link').magnificPopup({
        items: {
            src: '.table-inverse'
        },
        type:'inline',
        midClick: true ,
        callbacks: {
            open: function () {
                $('.mfp-content').addClass('animated bounceIn');
            }
        }
    });
});



