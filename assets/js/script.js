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
        $('body').css('display','none');
        setTimeout(function() { 
        $('body').css('display','block');
        }, 1000);
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

        $('.slider-row-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-row'
          });
          $('.slider-row').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            asNavFor: '.slider-row-single',
            dots: true,
            centerMode: true,
            centerPadding: '60px',
            focusOnSelect: true
          });
});

      
      

