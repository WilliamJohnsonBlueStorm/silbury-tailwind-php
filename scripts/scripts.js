$(function(){

    //Open mobile menu when open-mobile-menu is clicked
    $('#open-mobile-menu').on('click', function(e){
        e.preventDefault();
        var mobileHeader = $('#mobile-header');

        if(mobileHeader) {
            mobileHeader.show();
        }

    });

    //Close mobile menu when close-mobile-menu is clicked
    $('#close-mobile-menu').on('click', function(e){
        e.preventDefault();
        var mobileHeader = $('#mobile-header');

        if(mobileHeader) {
            mobileHeader.hide();
        }
    });

    $('.footer-header').on('click', function()
    {
        //when h3.accordion-header is clicked,
        //remove class open
        //remove class fa-chevron-up, add class fa-chevron-down

        if ($(window).width() < 576) {
            $(this).next().toggle('open');
            $(this).find('i').toggleClass('fa-chevron-up fa-chevron-down');
        }

    });

});