jQuery(function($) {
    if( $(window).width() < 769 ){
        $('.burger-menu').click(function(){
            $('#menu-home-page-main-menu').slideToggle()
            $('#menu-main-menu').slideToggle()
        })
    }
});

jQuery(document).ready(function ($) {

    var jssor_1_options = {
      $AutoPlay: 1,
      $AutoPlaySteps: 4,
      $SlideDuration: 160,
      $SlideWidth: 290,
      $SlideHeight: 215,
      $SlideSpacing: 3,
      $Cols: 4,
      $ArrowNavigatorOptions: {
        $Class: $JssorArrowNavigator$,
        $Steps: 4
      },
      $BulletNavigatorOptions: {
        $Class: $JssorBulletNavigator$,
        $SpacingX: 1,
        $SpacingY: 1
      }
    };

    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

    /*responsive code begin*/
    /*remove responsive code if you don't want the slider scales while window resizing*/
    function ScaleSlider() {
        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
        if (refSize) {
            refSize = Math.min(refSize, 1160);
            jssor_1_slider.$ScaleWidth(refSize);
        }
        else {
            window.setTimeout(ScaleSlider, 30);
        }
    }
    ScaleSlider();
    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    /*responsive code end*/
});