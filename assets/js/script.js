$(document).ready(function () {
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 100) {
            $(".header,.header-container").addClass("sticky");
            } else {
            $(".header,.header-container").removeClass("sticky");
            }
        });
        $(window).on("scroll", function () {
            if ($(window).scrollTop() > 350) {
            $(".bordered-text").addClass("color-cta");
            } else {
            $(".bordered-text").removeClass("color-cta");
            }
        });
        // $('body').css('display','none');
        // setTimeout(function() { 
        // $('body').css('display','block');
        // }, 1000);
        var theToggle = document.getElementById("toggle");
        // hasClass
        function hasClass(elem, className) {
            return new RegExp(" " + className + " ").test(
            " " + elem.className + " "
            );
        }
        // addClass
        function addClass(elem, className) {
            if (!hasClass(elem, className)) {
            elem.className += " " + className;
            }
        }
        // removeClass
        function removeClass(elem, className) {
            var newClass = " " + elem.className.replace(/[\t\r\n]/g, " ") + " ";
            if (hasClass(elem, className)) {
            while (newClass.indexOf(" " + className + " ") >= 0) {
                newClass = newClass.replace(" " + className + " ", " ");
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, "");
            }
        }
        // toggleClass
        function toggleClass(elem, className) {
            var newClass = " " + elem.className.replace(/[\t\r\n]/g, " ") + " ";
            if (hasClass(elem, className)) {
            while (newClass.indexOf(" " + className + " ") >= 0) {
                newClass = newClass.replace(" " + className + " ", " ");
            }
            elem.className = newClass.replace(/^\s+|\s+$/g, "");
            } else {
            elem.className += " " + className;
            }
        }
        theToggle.onclick = function () {
            toggleClass(this, "on");
            return false;
        };

        $('.slider-x').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed:2300,
            arrows: false,
            draggable: false,
            accessibility: false,
            dots: false,
            focusOnSelect: false,
            fade: true,
            asNavFor: '.slider-z'
          });
          $('.slider-y').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.slider-z',
            speed:500,
            fade: true,
            dots: false,
            swipeToSlide:false,
            draggable: false,
            arrows: false,
            accessibility: true,
            lazyLoad: 'ondemand',
            centerMode: false
          });
          $('.slider-zx').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            dots: false,
            arrows: false
          });
          $('.slider-z').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            asNavFor: '.slider-x,.slider-y,.slider-zx',
            speed:1000,
            autoplay:true,
            autoplaySpeed:3000,
            dots: false,
            arrows: false,
            accessibility: true,
            centerMode: true,
            focusOnSelect: true,
            lazyLoad: 'ondemand',
            centerPadding: '20px'
          });


          $('.slider-experts').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed:1000,
            autoplay:false,
            autoplaySpeed:3000,
            dots: false,
            arrows: false,
            fade:true,
            accessibility: true,
            centerMode: true,
            focusOnSelect: true,
            lazyLoad: 'ondemand',
            centerPadding: '20px'
          });

});

      
