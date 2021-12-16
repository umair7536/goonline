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
            autoplay:true,
            autoplaySpeed:2000,
            dots: false,
            arrows: false,
            fade:true,
            accessibility: true,
            centerMode: false,
            focusOnSelect: true,
            lazyLoad: 'ondemand',
            centerPadding: '20px'
          });


          $('.review-x-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed:1000,
            autoplay:false,
            autoplaySpeed:2000,
            dots: false,
            arrows: false,
            fade:true,
            swipeToSlide:false,
            draggable: false,
            accessibility: true,
            centerMode: false,
            focusOnSelect: true,
            lazyLoad: 'ondemand',
            centerPadding: '20px',
            asNavFor: '.review-y-slider'
          });

          $('.review-y-slider').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            asNavFor: '.review-x-slider',
            speed:1000,
            autoplay:false,
            autoplaySpeed:2000,
            dots: false,
            arrows: false,
            swipeToSlide:false,
            draggable: false,
            accessibility: true,
            centerMode: false,
            focusOnSelect: true,
            lazyLoad: 'ondemand',
            centerPadding: '50px'
          });

          $('.slider-xx').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed:1000,
            autoplay:false,
            autoplaySpeed:2000,
            dots: false,
            arrows: false,
            fade:true,
            accessibility: true,
            asNavFor: '.slider-yy',
            centerMode: false,
            focusOnSelect: true,
            lazyLoad: 'ondemand',
            centerPadding: '20px'
          });
          $('.slider-yy').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.slider-xx',
            speed:1000,
            autoplay:true,
            autoplaySpeed:3000,
            dots: false,
            arrows: false,
            accessibility: true,
            centerMode: true,
            focusOnSelect: true,
            lazyLoad: 'ondemand',
            centerPadding: '350px'
          });


          $('.left-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed:1000,
            autoplay:false,
            autoplaySpeed:2000,
            dots: false,
            arrows: false,
            vertical: false,
            fade:true,
            accessibility: false,
            asNavFor: '.right-slider,.bg-slider',
            centerMode: false,
            focusOnSelect: true,
            focusOnChange: true,
            accessibility: false,
            lazyLoad: 'ondemand',
            centerPadding: '20px'
          });
          $('.right-slider').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay:false,
            autoplaySpeed:2000,
            asNavFor: '.left-slider,.bg-slider',
            vertical: true,
            swipe:false,
            verticalSwiping: false,
            dots: false,
            arrows: false,
            accessibility: false,
            centerMode: false,
            focusOnChange: true,
            focusOnSelect: true
          });
          $('.bg-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay:false,
            autoplaySpeed:2000,
            swipe:true,
            dots: false,
            arrows: false,
            accessibility: true,
            centerMode: false
          });
          $('.become-ae-slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay:false,
            autoplaySpeed:2000,
            asNavFor: '.become-aet-slider',
            dots: false,
            arrows: false,
            accessibility: false,
            centerMode: false,
            focusOnChange: true,
            focusOnSelect: true
          });
          $('.become-aet-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay:false,
            autoplaySpeed:2000,
            asNavFor: '.become-ae-slider',
            fade: true,
            dots: false,
            arrows: false,
            accessibility: false,
            centerMode: false,
            focusOnChange: true,
            focusOnSelect: true
          });

        //   Tabs
        $('#tabs-nav li:first-child').addClass('active');
        $('.tab-content').hide();
        $('.tab-content:first').show();

        // Click function
        $('#tabs-nav li').click(function(){
        $('#tabs-nav li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();

        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
        });

        $('#tabs-nav-1 li:first-child').addClass('active');
        $('.tab-content-1').hide();
        $('.tab-content-1:first').show();

        // Click function
        $('#tabs-nav-1 li').click(function(){
        $('#tabs-nav-1 li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content-1').hide();

        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
        });

        $('#tabs-expert-1 li:first-child').addClass('active');
        $('.tab-expert-1').hide();
        $('.tab-expert-1:first').show();
        $('#tabs-expert-1 li').click(function(){
        $('#tabs-expert-1 li').removeClass('active');
        $(this).addClass('active');
        $('.tab-expert-1').hide();
        var activeTab = $(this).find('a').attr('href');
        $(activeTab).fadeIn();
        return false;
        });


        $('.nav-link').addClass('current');
        $('.header li a').on('click', function (e) {
            $('.header li a.current').removeClass('current');
            $(this).addClass('current');
        });


});

      
