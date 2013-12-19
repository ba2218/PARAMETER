$('<img/>')
    .load(function(event) {
        $(this)
            .css({
                opacity: 0,
                top: (($(window).scrollTop() || 0) - $(this).height()) + 'px',
                position: 'absolute',
                left: '50%',
                margin: '0 0 0 -' + ($(this).width() / 2) + 'px' // horizontal center
            })
            .animate({
                opacity: 1,
                top: ($(window).scrollTop() || 0) + 'px'
            }, 800)
            .delay(3000)
            .fadeOut(600, function() {
                $(this).remove();
            });
    })
    .error(function() {})
    .attr('src', 'http://parameter.cc/staging/images/intro.png')
    .appendTo('body');