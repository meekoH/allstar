var $container = $('.feature-wrap');
// initialize
$($container).imagesLoaded( function() {
    $container.masonry({
      itemSelector: '.feature'
    });
});