$(document).ready(function(){

  /**
  * This part does the "fixed navigation after scroll" functionality
  * We use the jQuery function scroll() to recalculate our variables as the
  * page is scrolled/
  */
  $(window).scroll(function(){
    var window_top = $(window).scrollTop() + 12; // the "12" should equal the margin-top value for nav.stick
    var div_top = $('#nav-anchor').offset().top;
    if (window_top > div_top) {
      $('nav#side-nav').addClass('stick');
    } else {
      $('nav#side-nav').removeClass('stick');
    }
  });

  /**
  * This part handles the highlighting functionality.
  * We use the scroll functionality again, some array creation and
  * manipulation, class adding and class removing, and conditional testing
  */
  var aChildren = $("nav#side-nav li").children(); // find the a children of the list items
  var aArray = []; // create the empty aArray
  for (var i=0; i < aChildren.length; i++) {
    var aChild = aChildren[i];
    var ahref = $(aChild).attr('href');
    aArray.push(ahref);
  } // this for loop fills the aArray with attribute href values

  $(window).scroll(function(){
    var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
    var windowHeight = $(window).height(); // get the height of the window
    var docHeight = $(document).height();

    for (var i=0; i < aArray.length; i++) {
      var theID = aArray[i];
      var divPos = $(theID).offset().top; // get the offset of the div from the top of page
      var divHeight = $(theID).height(); // get the height of the div in question
      if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
        $("a[href='" + theID + "']").parent().addClass("active");
      } else {
        $("a[href='" + theID + "']").parent().removeClass("active");
      }
    }

  });
});
