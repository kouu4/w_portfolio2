jQuery(function () {

    const interval = 6000;

    const images = jQuery('.fv__photo img');
    const texts = jQuery('.fv__message .fv__text');
    let imageCurrentIndex = 0;
    let textCurrentIndex = 0;
    const imageCount = images.length;
    const textCount = texts.length;

    function changeImage() {
        images.eq(imageCurrentIndex).addClass('hidden');
        imageCurrentIndex = (imageCurrentIndex + 1) % imageCount;
        images.eq(imageCurrentIndex).removeClass('hidden');
    }

    function hideCurrentText() {
        texts.eq(textCurrentIndex).addClass('hidden');
    }

    function showNextText() {
        textCurrentIndex = (textCurrentIndex + 1) % textCount;
        texts.eq(textCurrentIndex).removeClass('hidden');
    }

    function schedule() {
        changeImage();
        setTimeout(hideCurrentText, 1000);
        setTimeout(showNextText, 2000);
    }

    function initialize(){
        images.not(':first').addClass('hidden');
        texts.not(':first').addClass('hidden');
        setInterval(schedule, interval);
    }

    initialize();
});



