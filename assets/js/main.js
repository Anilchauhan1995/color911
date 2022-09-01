$(document).on('click', '.show_more', function() {

    $(".m-v-content").removeClass("active");

    $(this).parent().find(".m-v-content").addClass("active");

    $(this).removeClass("show_more");

    $(this).addClass("show_less");

    $(this).find('.bottom_underline').html('Show Less');

    // console.log($(this).html());    

})

$("#navBar ul li ").click(function() {

    $("#navBar, body").removeClass("show , oveflow_y");

    $(".navbar-toggler").removeAttr('aria-expanded', 'false');



});

$(document).on('click', '.show_less', function() {

    $(".m-v-content").removeClass("active");

    $(this).removeClass("show_less");

    $(this).addClass("show_more");

    $(this).find('.bottom_underline').html('Show More');

    $(".more_content").find('.bottom_underline').html('Show More');

})



$("button.navbar-toggler").click(function() {

    $("body").toggleClass("oveflow_y");



});




$('.m-logos-slider').slick({
    centerPadding: '60px',
    slidesToShow: 4,
    responsive: [{
            breakpoint: 991,
            settings: {
                centerPadding: '40px',
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});
// ipad & mobile view slider

// mobileOnlySlider(".m-logos-slider", true, true, true, 4, true, true, 1024);

// function mobileOnlySlider($slidername, $dots, $arrows, $loop, $slideshow, $infiniter, $autoplay, $breakpoint) {

//     var slider = $($slidername);

//     var settings = {

//         dots: $dots,

//         loop: $loop,

//         arrows: $arrows,

//         autoplay: $autoplay,

//         infinite: $infiniter,

//         slidesToShow: $slideshow,



//         pauseOnHover: true,

//         speed: 800,

//         autoplaySpeed: 1000,

//         slidesToScroll: 1,

//         responsive: [{

//                 breakpoint: $breakpoint,

//                 settings: {

//                     slidesToShow: 3,

//                     autoplay: true,

//                     infinite: true,

//                     loop: true,

//                     dots: false,

//                 }



//             },

//             {

//                 breakpoint: 768,

//                 settings: {

//                     slidesToShow: 1,

//                     slidesToScroll: 1,

//                     infinite: true,

//                     autoplay: true,

//                     dots: false,

//                     loop: true,

//                 }

//             }

//         ]

//     };



//     slider.slick(settings);



// $(window).on("resize", function() {

// 	if ($(window).width() > $breakpoint) {

// 		return;

// 	}

// 	if (!slider.hasClass("slick-initialized")) {

// 		return slider.slick(settings);

// 	}







// });

// }

// ipad & mobile view slider End



// sticky top function

jQuery(document).ready(function() {

    jQuery(window).scroll(function() {

        var scroll = jQuery(window).scrollTop();

        if (scroll >= 10) {

            jQuery(".navbar-light").addClass("sticky-top");

        } else {

            jQuery(".navbar-light").removeClass("sticky-top");

        }



    });

});



// sticky top function End







// back to top button js



let mybutton = document.getElementById("btn-back-to-top");



window.onscroll = function() {

    scrollFunction();

};



function scrollFunction() {

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

        mybutton.style.opacity = 1;

    } else {

        mybutton.style.opacity = 0;

    }

}

mybutton.addEventListener("click", backToTop);



function backToTop() {

    document.body.scrollTop = 0;

    document.documentElement.scrollTop = 0;

}

// back to top button End js