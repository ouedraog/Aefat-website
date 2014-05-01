/*---LEFT BAR ACCORDION----*/
$(function() {
    $('#nav-accordion').dcAccordion({
        eventType: 'click',
        autoClose: true,
        saveState: true,
        disableLink: true,
        speed: 'slow',
        showCount: false,
        autoExpand: true,
        //        cookie: 'dcjq-accordion-1',
        classExpand: 'dcjq-current-parent'
    });
    

    //  sidebar dropdown menu auto scrolling

    $('#sidebar .sub-menu > a').click(function () {
        var o = ($(this).offset());
        diff = 250 - o.top;
        if(diff>0)
            $("#sidebar").scrollTo("-="+Math.abs(diff),500);
        else
            $("#sidebar").scrollTo("+="+Math.abs(diff),500);
    });

  
    $(function() {
        function responsiveView() {
            var wSize = $(window).width();
            if (wSize <= 768) {
                $('#container').addClass('sidebar-close');
                $('#sidebar > ul').hide();
            }

            if (wSize > 768) {
                $('#container').removeClass('sidebar-close');
                $('#sidebar > ul').show();
            }
        }
        $(window).on('load', responsiveView);
        $(window).on('resize', responsiveView);
    });

    $('.icon-reorder').click(function () {
        if ($('#sidebar > ul').is(":visible") === true) {
            $('#main-content').css({
                'margin-left': '0px'
            });
            $('#sidebar').css({
                'margin-left': '-210px'
            });
            $('#sidebar > ul').hide();
            $("#container").addClass("sidebar-closed");
        } else {
            $('#main-content').css({
                'margin-left': '210px'
            });
            $('#sidebar > ul').show();
            $('#sidebar').css({
                'margin-left': '0'
            });
            $("#container").removeClass("sidebar-closed");
        }
    });
  
    //custom scrollbar
    $("#sidebar").niceScroll({styler:"fb",cursorcolor:"#e8403f", cursorwidth: '3', cursorborderradius: '10px', background: '#404040', spacebarenabled:false, cursorborder: ''});

    $("html").niceScroll({styler:"fb",cursorcolor:"#e8403f", cursorwidth: '6', cursorborderradius: '10px', background: '#404040', spacebarenabled:false,  cursorborder: '', zindex: '1000'});

    //widget tools

    $('.panel .tools .icon-chevron-down').click(function () {
        var el = $(this).parents(".panel").children(".panel-body");
        if ($(this).hasClass("icon-chevron-down")) {
            $(this).removeClass("icon-chevron-down").addClass("icon-chevron-up");
            el.slideUp(200);
        } else {
            $(this).removeClass("icon-chevron-up").addClass("icon-chevron-down");
            el.slideDown(200);
        }
    });

    $('.panel .tools .icon-remove').click(function () {
        $(this).parents(".panel").parent().remove();
    });


    //tool tips
    $('.tooltips').tooltip({
        placement: 'bottom'
    });
    //popovers
    $('.popovers').popover();

    //custom bar chart

    if ($(".custom-bar-chart")) {
        $(".bar").each(function () {
            var i = $(this).find(".value").html();
            $(this).find(".value").html("");
            $(this).find(".value").animate({
                height: i
            }, 2000);
        });
    }
    $("table").addClass("table");
    $("#contact-site-form").wrap("<div class='panel' id='_contact-form-wrapper'></div>")
            .wrap("<div class='panel-body'></div>")
            .addClass("form-horizontal");
    $("#_contact-form-wrapper").prepend("<div class='panel-heading'>"+
            " Formulaire de contact </div>");
    $("#contact-site-form * input[type='text']").addClass("form-control")
            .wrap("<div class='col-lg-4'></div>");;
    $("#contact-site-form * label").addClass("col-lg-2 col-sm-2 control-label");
    $("select, textarea").addClass("form-control");
     $("#contact-site-form * .form-textarea-wrapper").addClass("col-lg-10");
    $("#contact-site-form * select").wrap("<div class='col-lg-2'></div>");
    $(".grippie").remove();
    $("#contact-site-form * .form-item").addClass("form-group");
    $("#contact-site-form * input[type='submit']").addClass("btn btn-info");
    

});
