jQuery(function($) {
    if( $(window).width() < 769 ){
        $('.burger-menu').click(function(){
            $('#menu-home-page-main-menu').slideToggle()
            $('#menu-main-menu').slideToggle()
        })
    }
});