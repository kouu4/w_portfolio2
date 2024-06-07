jQuery(".openbtn").click(function () {
    jQuery(this).toggleClass('active');
    if (jQuery(this).hasClass('active')) {
        jQuery('#overlay').fadeIn(200);
    } else {
        jQuery('#overlay').fadeOut(200);
    }
});

jQuery('#overlay a').click(function () {
    jQuery('.openbtn').toggleClass('active');
    jQuery('#overlay').fadeOut(200);
})

console.log(111)