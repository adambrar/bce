var $root = $('html, body');

$('a.smooth-scroll[href^="#"]').click(function () {
    var $targetTop = $( $.attr(this, 'href') ).offset().top - 60;
    $root.animate({
        scrollTop: $targetTop
    }, 1000);

    return false;
});