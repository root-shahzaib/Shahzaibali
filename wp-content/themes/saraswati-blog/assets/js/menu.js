(function($) {

  $.fn.menumaker = function(options) {
      
      var cssmenu = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      var count = 0;
      return this.each(function() {
            cssmenu.prepend('<a href="#" id="menu-button'+count+'" class="menu-button">' + settings.title + '</a>');
            $(this).find(".menu-button").on('click', function(){
              $(this).toggleClass('menu-opened');
              var mainmenu = $("ul.menu");
              if (mainmenu.hasClass('open')) { 
                mainmenu.slideUp().removeClass('open');
              }
              else {
                mainmenu.slideDown().addClass('open');
                if (settings.format === "dropdown") {
                  mainmenu.find('ul').slideDown();
                }
              }
              count++; 
        });
           

        cssmenu.find('li ul').parent().addClass('has-sub');

        multiTg = function() {
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').slideUp();
            }
            else {
              $(this).siblings('ul').addClass('open').slideDown();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else cssmenu.addClass('dropdown');

        if (settings.sticky === true) cssmenu.css('position', 'fixed');

        resizeFix = function() {
          if ($( window ).width() > 800) {
            cssmenu.find('ul').show();
          }

          if ($(window).width() <= 800) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);

(function($){
    $(document).ready(function(){

        $(document).ready(function() {
            
            $("#header-menu-wrap").menumaker({
            title: "Menu",
            format: "multitoggle"
          });
          $("#header-menu-left").menumaker({
            title: "Menu 1",
            format: "multitoggle"
          });

          $("#header-menu-right").menumaker({
            title: "Menu 2",
            format: "multitoggle"
          });

          

          $(".menu-line-on").prepend("<div id='menu-line'></div>");

        var foundActive = false, activeElement, linePosition = 0, menuLine = $(".cssmenu #menu-line"), lineWidth, defaultPosition, defaultWidth;

        $(".cssmenu > ul > li").each(function() {
          if ($(this).hasClass('active')) {
            activeElement = $(this);
            foundActive = true;
          }
        });

        if (foundActive === false) {
          activeElement = $(".cssmenu > ul > li").first();
        }

        defaultWidth = lineWidth = activeElement.width();

        defaultPosition = linePosition = activeElement.position();

        menuLine.css("width", lineWidth);
        menuLine.css("left", linePosition);

        $(".cssmenu > ul > li").hover(function() {
          activeElement = $(this);
          lineWidth = activeElement.width();
          linePosition = activeElement.position().left;
          menuLine.css("width", lineWidth);
          menuLine.css("left", linePosition);
        }, 
        function() {
          menuLine.css("left", defaultPosition);
          menuLine.css("width", defaultWidth);
        });

    });


    });

/*====================================
        // menu-fix
        ======================================*/

        jQuery(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $('.primary_menu').addClass("affix");
            } else {
                $('.primary_menu').removeClass("affix");
            }
        });




    
})(jQuery);
