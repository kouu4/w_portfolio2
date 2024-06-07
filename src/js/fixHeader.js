jQuery(function(){
    jQuery(window).scroll(function(){
        if(jQuery(window).scrollTop() > jQuery(window).height()){
            jQuery('.header__body').css("background-color", "rgba(239, 239, 239, 0.8)");
        } else {
            jQuery('.header__body').css("background-color", "transparent");
        }
    })
})
