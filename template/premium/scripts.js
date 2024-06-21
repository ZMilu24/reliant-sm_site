$(document).ready(function() {
    let fullHeight = document.documentElement.scrollHeight;

    if (fullHeight !== window.innerHeight) {
        $('footer').css({
            'bottom': '0',
            'width': '100%',
            'position': 'relative',
        });
    } else {
        $('footer').css({
            'position': 'absolute',
            'bottom': '0',
            'width': '100%',
        });
    }
});