jQuery(function() {
    jQuery('.accordion-title').click(function() {
        jQuery(this).next('.accordion-content').slideToggle();
        jQuery(this).toggleClass('active');
    });
});