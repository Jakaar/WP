$(function(){
    var $banner111 = $('.banner111'), $window = $(window);
    var $topDefault = parseFloat( $banner111.css('bottom'), 10 );
    $window.on('scroll', function(){
        var $top = $(this).scrollTop();
        $banner111.stop().animate( { bottom: -( $top - $topDefault) }, 1000, 'easeOutBack' );
    });


});