(function($){
  documentReady();
  
  function documentReady() {
    jQuery(document).ready(function(){
        console.log('OK');
        speakersSlider();
      }
    )
  }

  function speakersSlider(){
    var slider = $("#speakers-slider");
    if( slider.length > 0 ){
      console.log('Slider..');
      slider.owlCarousel({
        items: 6,
        loop:true,
        nav: false,
        dots: false,
        margin: 32,
      })

      $('.next-slide').click(function() {
        slider.trigger('next.owl.carousel');
      })
      // Go to the previous item
      $('.prev-slide').click(function() {
          // With optional speed parameter
          // Parameters has to be in square bracket '[]'
          slider.trigger('prev.owl.carousel', [300]);
      })
    }
  }

})(jQuery)
