/*================================================
 [  START LIST OF SCRIPTS ]
 ================================================
 
 :: Homepage Slider
 :: Recipe Slider
 :: Alternative Homepage Slider
 :: Image Height Fix
 :: Mobile Navigation
 :: Isotope
 :: Search
 :: Accordions
 :: Perloading Page
 :: Random Class for category
 :: Facebook Comments
 
 ======================================
 [ End table content ]
 ======================================*/
(function ($) {
    "use strict";

    $(document).ready(function () {
        //Navigation
        function menumobile() {
            var winWidth = $(window).width();
            if (winWidth < 973) {
                $('#navigation').removeClass('menu');
                $('#navigation li').removeClass('dropdown');
                $('#navigation').superfish('destroy');
            } else {
                $('#navigation').addClass('menu');
                $('#navigation').superfish({
                    delay: 300, // one second delay on mouseout
                    animation: {opacity: 'show', height: 'show'}, // fade-in and slide-down animation
                    speed: 200, // animation speed
                    speedOut: 50                                 // out animation speed
                });
            }
        }
        $(window).resize(function () {
            menumobile();
        });
        menumobile();

        // Homepage Slider

        var rsi = $('#homeSlider').royalSlider({
            controlNavigation: 'thumbnails',
            imageScaleMode: 'fill',
            arrowsNav: false,
            arrowsNavHideOnTouch: true,
            slidesSpacing: 0,
            fullscreen: false,
            loop: false,
            thumbs: {
                firstMargin: false,
                paddingBottom: 0,
                spacing: 0
            },
            numImagesToPreload: 3,
            thumbsFirstMargin: false,
            keyboardNavEnabled: true,
            navigateByClick: false,
            fadeinLoadedSlide: true,
            transitionType: 'fade',
            block: {
                fadeEffect: true,
                moveEffect: 'top',
                delay: 0
            }

        }).data('royalSlider');
        $('#slider-next').click(function () {
            rsi.next();
        });
        $('#slider-prev').click(function () {
            rsi.prev();
        });

        // Recipe Slider
        $(".recipeSlider").royalSlider({
            imageScalePadding: 0,
            keyboardNavEnabled: true,
            navigateByClick: false,
            fadeinLoadedSlide: true,
            arrowsNavAutoHide: false,
            imageScaleMode: 'fill',
            arrowsNav: true,
            slidesSpacing: 0,
        });

        // Alternative Homepage Slider
        $('#homeSliderAlt').royalSlider({
            arrowsNav: false,
            fadeinLoadedSlide: true,
            controlNavigationSpacing: 0,
            controlNavigation: 'thumbnails',
            thumbs: {
                autoCenter: false,
                fitInViewport: true,
                orientation: 'vertical',
                spacing: 0,
                paddingBottom: 0
            },
            keyboardNavEnabled: true,
            imageScaleMode: 'fill',
            imageAlignCenter: true,
            slidesSpacing: 0,
            loop: false,
            loopRewind: true,
            numImagesToPreload: 3,
            autoScaleSlider: true,
            autoScaleSliderWidth: 1180,
            autoScaleSliderHeight: 500,
        });

        //  Image Height Fix
        function fixliststylebox() {
            var winWidth = $(window).width();
            if (winWidth > 973) {
                $(".list-style .recipe-box-content").each(function () {
                    var recipeHeight = $(this).outerHeight();
                    $(this).parent().find('.thumbnail-holder').height(recipeHeight);
                });
            } else {
                $('.thumbnail-holder').css({
                    height: 'auto'
                });
            }
        }

        $(window).load(function () {
            fixliststylebox();

        });
        $(window).resize(function () {
            fixliststylebox();

        });

        //  Mobile Navigation

        var navigation = responsiveNav(".nav-collapse", {
            animate: true, // Boolean: Use CSS3 transitions, true or false
            transition: 284, // Integer: Speed of the transition, in milliseconds
            label: "Menu", // String: Label for the navigation toggle
            insert: "before", // String: Insert the toggle before or after the navigation
            customToggle: "", // Selector: Specify the ID of a custom toggle
            closeOnNavClick: false, // Boolean: Close the navigation when one of the links are clicked
            openPos: "relative", // String: Position of the opened nav, relative or static
            navClass: "nav-collapse", // String: Default CSS class. If changed, you need to edit the CSS too!
            navActiveClass: "js-nav-active", // String: Class that is added to <html> element when nav is active
            jsClass: "js", // String: 'JS enabled' class which is added to <html> element
            init: function () {
            }, // Function: Init callback
            open: function () {
            }, // Function: Open callback
            close: function () {
            }               // Function: Close callback
        });

        //Isotope

        $(window).load(function () {
            var $container = $('.isotope');
            $container.isotope({itemSelector: '.recipe-box, .isotope-box', layoutMode: 'masonry'});
        });


        //Search

        $('.adv-search-btn').click(function (event) {
            var slideDuration = 200;

            if ($(this).hasClass('opened')) {
                $('.adv-search-btn').removeClass('active');
                $(this).removeClass('opened').find('i').addClass('fa-caret-down').removeClass('fa-caret-up');
                $('.extra-search-options').stop(true, true).fadeOut({duration: slideDuration, queue: false}).slideUp(slideDuration);
            } else {
                $('.adv-search-btn').addClass('active');
                $(this).addClass('opened').find('i').addClass('fa-caret-up').removeClass('fa-caret-down');
                $('.extra-search-options').removeClass('closed').stop(true, true).fadeIn({duration: slideDuration, queue: false}).css('display', 'none').slideDown(slideDuration);
            }
            event.preventDefault();
        });

        var config = {
            '.chosen-select': {disable_search_threshold: 10, width: "100%"},
            '.chosen-select-deselect': {allow_single_deselect: true, width: "100%"},
            '.chosen-select-no-single': {disable_search_threshold: 10, width: "100%"},
            '.chosen-select-no-results': {no_results_text: 'Oops, nothing found!'},
            '.chosen-select-width': {width: "95%"}
        };
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }

        //Accordions
        var $accor = $('.accordion');

        $accor.each(function () {
            $(this).addClass('ui-accordion ui-widget ui-helper-reset');
            $(this).find('h3').addClass('ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all');
            $(this).find('div').addClass('ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom');
            $(this).find("div").hide().first().show();
            $(this).find("h3").first().removeClass('ui-accordion-header-active ui-state-active ui-corner-top').addClass('ui-accordion-header-active ui-state-active ui-corner-top');
            $(this).find("span").first().addClass('ui-accordion-icon-active');
        });

        var $trigger = $accor.find('h3');

        $trigger.on('click', function (e) {
            var location = $(this).parent();

            if ($(this).next().is(':hidden')) {
                var $triggerloc = $('h3', location);
                $triggerloc.removeClass('ui-accordion-header-active ui-state-active ui-corner-top').next().slideUp(300);
                $triggerloc.find('span').removeClass('ui-accordion-icon-active');
                $(this).find('span').addClass('ui-accordion-icon-active');
                $(this).addClass('ui-accordion-header-active ui-state-active ui-corner-top').next().slideDown(300);
            }
            e.preventDefault();
        });
    });
    //Random Class for category
    function randOrder() {
        return (Math.round(Math.random()) - 0.5);
    }
    var classes = ['cat-light', 'cat-dark', 'cat-regular'];
    classes.sort(randOrder);
    $('.home-cats a').each(function (i) {
        $(this).addClass(classes[ Math.floor(Math.random() * classes.length) ]);
    });

    //Check Inpiut for recipe page
    $('#ingredients-list input').each(function (i) {
        $(this).attr('id', 'check-' + (i + 1));
        $(this).attr('value', 'check-' + (i + 1));
    });
    $('#ingredients-list label').each(function (i) {
        $(this).attr('for', 'check-' + (i + 1));
    });
//Facebook Comments
    window.fbAsyncInit = function () {
        FB.init({
            appId: '1330216073766214',
            xfbml: true,
            version: 'v2.9'
        });
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));



})(this.jQuery);

//Perloading Page
jQuery(window).on("load", function () {
    $('.preloade').fadeOut(500);
});


jQuery(window).ready(function () {
    popup_switch = function ($type) {
        jQuery('.login_loading').hide();
        jQuery('.login_errors').hide();
        jQuery('.popup_register').hide();
        jQuery('.popup_login').hide();
        jQuery('.popup_forgot').hide();

        jQuery('.popup_' + $type).show();

        jQuery('#loginModel').modal('show');
    };
    jQuery('.popup_login').submit(function (e) {
        jQuery('.login_errors').hide();
        jQuery('.login_loading').show();
        e.preventDefault();
        jQuery.post(site_url + 'account/login', jQuery(this).serialize(), function (res) {
            res = JSON.parse(res);
            jQuery('.login_loading').hide();
            if (res.error) {
                jQuery('.login_errors').html(res.message);
                jQuery('.login_errors').show();
            } else {
                window.location = window.location;
            }
            return false;
        });
        return false;
    });

     jQuery('.popup_register').submit(function (e) {
        
        jQuery('.login_errors').hide();
        jQuery('.login_loading').show();
        e.preventDefault();
        jQuery.post(site_url + 'account/register', jQuery(this).serialize(), function (res) {
          
            jQuery('.login_loading').hide();
              res = JSON.parse(res);
            if (res.error) {
                jQuery('.login_errors').html(res.message);
                jQuery('.login_errors').show();
            } else {
                window.location = window.location;
            }
        });
        return false;
    });

    jQuery('.popup_forgot').submit(function (e) {
        e.preventDefault();
        jQuery('.login_errors').hide();
        jQuery('.login_loading').show();
        jQuery.post(site_url + 'account/forgot', jQuery(this).serialize(), function (res) {
            jQuery('.login_loading').hide();
            res = JSON.parse(res);
            if (res.error) {
                jQuery('.login_errors').html(res.message);
                jQuery('.login_errors').show();
            } else {
                window.location = window.location;
            }
        });
        return false;
    });


    popup = function (title, message) {

        jQuery('body').append('<div class="modal fade" id="dialog" role="dialog"><div class="modal-dialog login-model"><div class="modal-content"><div class="modal-header"><i class="fa fa-times-circle close" aria-hidden="true" data-dismiss="modal"></i><h4 class="modal-title">' + title + '</h4>' +
                '</div><div class="modal-body">' +
                message +
                ' </div></div></div></div>');
        jQuery("#dialog").on('hidden.bs.modal', function () {
            $(this).remove();
        });
        jQuery("#dialog").modal('show');
    }


    $('.close-msg').click(function () {
        window.location.href = window.location.href;
    });

// setTimeout(function(){
//        $('.alert-success').fadeOut();}, 1000);
//


});