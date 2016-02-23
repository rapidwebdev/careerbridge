jQuery(document).ready(function($) {

  // Fireflies
  $.firefly({
    color: '#FFFFFF',
    minPixel: 2,
    maxPixel: 2,
    total : 25,
    on: '#firefly'
  });

  var link = $('li.menu-item a');

  $(link).mouseover(function(){
    $(this).addClass('menu-lines');
  });

  // $(link).hover(
  //   function(){
  //     $(this).addClass('menu-lines');
  //   },
  //   function(){
  //     $(this).removeClass('menu-lines');
  //   }
  // );


}); jQuery