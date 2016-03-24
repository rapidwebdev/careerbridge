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


  // Set product displays to equal height

  var maxHeight = -1;

  // $('.article .articleHead').each(function() {
  //  maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
  // });

  // $('.article .articleHead').each(function() {
  //  $(this).height(maxHeight);
  // });

  // $('.article2 .articleHead').each(function() {
  //  maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
  // });

  // $('.article2 .articleHead').each(function() {
  //  $(this).height(maxHeight);
  // });

  // $('.article3 .articleHead').each(function() {
  //  maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
  // });

  // $('.article3 .articleHead').each(function() {
  //  $(this).height(maxHeight);
  // });

  $('.mainWrap .article').each(function() {
   maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
  });

  $('.mainWrap .article').each(function() {
   $(this).height(maxHeight);
  });
  
}); jQuery

// window.addEventListener("orientationchange", function() {
//   var maxHeight = -1;

//     $('#article #articleHead').each(function() {
//      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
//     });

//     $('#article #articleHead').each(function() {
//      $(this).height(maxHeight);
//     });

//     $('#article2 #articleHead').each(function() {
//      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
//     });

//     $('#article2 #articleHead').each(function() {
//      $(this).height(maxHeight);
//     });

//     $('#article3 #articleHead').each(function() {
//      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
//     });

//     $('#article3 #articleHead').each(function() {
//      $(this).height(maxHeight);
//     });

//     $('.mainWrap .article').each(function() {
//      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
//     });

//     $('.mainWrap .article').each(function() {
//      $(this).height(maxHeight);
//     });
// }, false);

// jQuery(window).on("orientationchange",function($){
//     var maxHeight = -1;

//     $('#article #articleHead').each(function() {
//      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
//     });

//     $('#article #articleHead').each(function() {
//      $(this).height(maxHeight);
//     });

//     $('#article2 #articleHead').each(function() {
//      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
//     });

//     $('#article2 #articleHead').each(function() {
//      $(this).height(maxHeight);
//     });

//     $('#article3 #articleHead').each(function() {
//      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
//     });

//     $('#article3 #articleHead').each(function() {
//      $(this).height(maxHeight);
//     });

//     $('.mainWrap .article').each(function() {
//      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
//     });

//     $('.mainWrap .article').each(function() {
//      $(this).height(maxHeight);
//     });

//     alert('orientationchange');

//   }); jQuery

jQuery(window).on("orientationchange",function(){

  setTimeout(function () {

   var maxHeight = -1;

  // jQuery('.article .articleHead').each(function() {
  //  maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
  // });

  // jQuery('.article .articleHead').each(function() {
  //  jQuery(this).height(maxHeight);
  // });

  // jQuery('.article2 .articleHead').each(function() {
  //  maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
  // });

  // jQuery('.article2 .articleHead').each(function() {
  //  jQuery(this).height(maxHeight);
  // });

  // jQuery('.article3 .articleHead').each(function() {
  //  maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
  // });

  // jQuery('.article3 .articleHead').each(function() {
  //  jQuery(this).height(maxHeight);
  // });

  jQuery('.mainWrap .article').each(function() {
   maxHeight = maxHeight > jQuery(this).height() ? maxHeight : jQuery(this).height();
  });

  jQuery('.mainWrap .article').each(function() {
   jQuery(this).height(maxHeight);
  });
  
  alert("The orientation has changed!");
  
  }, 2000);

}); jQuery

//   window.addEventListener("resize", function() {
//     var maxHeight = -1;

//     $('.article .articleHead').each(function() {
//      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
//     });

//     $('.article .articleHead').each(function() {
//      $(this).height(maxHeight);
//     });

//     $('.article2 .articleHead').each(function() {
//      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
//     });

//     $('.article2 #articleHead').each(function() {
//      $(this).height(maxHeight);
//     });

//     $('#article3 #articleHead').each(function() {
//      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
//     });

//     $('#article3 #articleHead').each(function() {
//      $(this).height(maxHeight);
//     });

//     $('.mainWrap .article').each(function() {
//      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
//     });

//     $('.mainWrap .article').each(function() {
//      $(this).height(maxHeight);
//     });
  
// }, false);

// var lastScrollTop = 0, delta = 50;
// jQuery(window).scroll(function(event){
//    var st = jQuery(this).scrollTop();

//    if(Math.abs(lastScrollTop - st) <= delta)
//       return;

//    if (st > lastScrollTop){
//        // downscroll code
//       jQuery('.mainNav').animate({top: '-60px'}, 400);
//    } else {
//       // upscroll code
//       jQuery('.mainNav').animate({top: '0'}, 400);
//    }
//    lastScrollTop = st;
// }); 