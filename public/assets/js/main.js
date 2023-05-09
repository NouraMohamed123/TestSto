$(function () {

    $('.what-we-do .owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        rtl:true,
        dots: false,
        stagePadding: 100,
        responsive:{
            0:{
                items:1,
                nav:false,
            },
            600:{
                items:3,
                nav:false,
            },
            1000:{
                items:4
            }
        }
    })

    $('.page').closest('body').addClass('template-page')

    $('.section-images .owl-carousel').owlCarousel({
        loop:true,
        margin:70,
        nav:true,
        rtl:true,
        dots: false,
        stagePadding: 350,
        responsive:{
            0:{
                items:1,
                stagePadding: 50,
                margin:10,                
            },
            600:{
                items:1,
                stagePadding: 150,
                margin:20,
            },
            1000:{
                items:1
            }
        }
    });

    $('.testimonials .owl-carousel').owlCarousel({
        loop:true,
        margin:20,
        nav:false,
        dots: true,
        rtl:true,
        stagePadding: 80,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });    

    $(".input-coupon").keyup(function(event){
       if($(this).val() == '') {
        $('.applay-coupon button').prop("disabled", true);
       } else {
        $('.applay-coupon button').prop("disabled", false);
       }
        
        

        
     });    


    $(window).scroll(function () {
    
        if ($(this).scrollTop() >= 100) {    
            $('.header').addClass('fixed')
        } else {
            $('.header').removeClass('fixed')
        }    
    }); 
       

});