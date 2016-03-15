jQuery(document).ready(function($) {

  // Fireflies
  if ( $('#firefly').length ) {
      $.firefly({
      color: '#FFFFFF',
      minPixel: 2,
      maxPixel: 2,
      total : 25,
      on: '#firefly'
    });
  };

  $('.categories a').hover(
    function(){
      $(this).find('span').addClass('cat-hover');
      $(this).find('h2').addClass('cat-hover');
    },
    function(){
      $(this).find('span').removeClass('cat-hover');
      $(this).find('h2').removeClass('cat-hover');
    }
  );

  // Smooth Scroll
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

  $('.mag-glass').click(function() {
    $(this).toggleClass('active');
    $('.searchForm').toggleClass('left');
    return false;
  });

  $('.menuBtn').click(function() {
    $(this).toggleClass('active');
    $('.offCanvasMenu').toggleClass('open');
  });
  
}); jQuery

var lastScrollTop = 0, delta = 50;
jQuery(window).scroll(function(event){
   var st = jQuery(this).scrollTop();

   if(Math.abs(lastScrollTop - st) <= delta)
      return;

   if (st > lastScrollTop){
       // downscroll code
      jQuery('.mainNav').animate({top: '-60px'}, 400);
   } else {
      // upscroll code
      jQuery('.mainNav').animate({top: '0'}, 400);
   }
   lastScrollTop = st;
}); 