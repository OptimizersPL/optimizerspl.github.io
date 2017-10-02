console.log('Carousel plugin works.');
$('body').on('slide.bs.carousel', '.carousel', function(event) {

  var $carousel = $(this);
  var $vimeo = $(event.relatedTarget).children('[src*="vimeo"], [data-src*="vimeo"]');
  // Activate current Vimeo
  if( $vimeo.length ) {
    $vimeo.on("play", function(){
      $carousel.carousel('pause');
    });
    $vimeo.on("pause", function(){
      $carousel.carousel('cycle');
    });
  } else {
    $(this).carousel('cycle');
  }

});

$('body').on('slid.bs.carousel', '.carousel', function(event) {

  var $vimeos = $(event.relatedTarget).siblings().children('[src*="vimeo"]');
  // Deactivate all Vimeo
  if( $vimeos.length ) {
    $vimeos.vimeo("pause");
  }

});
