<?= js('assets/js/jquery.min.js') ?>
<?= js('assets/js/copiarCodigo.js') ?>
<?= js('assets/js/clipboard.js') ?>
<?= js('assets/js/scrollreveal.js') ?>
<?= js('assets/js/stickUp.js') ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
window.sr = ScrollReveal({
  reset: false
});
sr.reveal('.jumbotron_body')
sr.reveal('.panel', { duration: 200 }, 50);
// sr.reveal('.interesar');
// sr.reveal('.main img');
// sr.reveal('.main p');
// sr.reveal('.main h1');
// sr.reveal('.main h2');
// sr.reveal('.main h3');
// sr.reveal('.main h4');
</script>

<script type="text/javascript">
$(document).ready(function(){
  $('.page-sidebar').stickUp();
});
</script>

<!-- <script type="text/javascript">
var sections = $('section')
, nav = $('.index-item')
, nav_height = nav.outerHeight();

$(window).on('scroll', function () {
  var cur_pos = $(this).scrollTop();

  sections.each(function() {
    var top = $(this).offset().top - nav_height,
    bottom = top + $(this).outerHeight();

    if (cur_pos >= top && cur_pos <= bottom) {
      nav.removeClass('active');
      sections.removeClass('active');

      $(this).addClass('active');
      nav.find('a[href="#'+$(this).attr('id')+'"]').parent().addClass('active');
    }
  });
});
</script> -->

<script type="text/javascript">
$(document).ready(function(){

    /**
     * This part handles the highlighting functionality.
     * We use the scroll functionality again, some array creation and
     * manipulation, class adding and class removing, and conditional testing
     */
    var aChildren = $("nav.page-sidebar li").children(); // find the a children of the list items
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
            var divPos = $(theID).top; // get the offset of the div from the top of page
            var divHeight = $(theID).height(); // get the height of the div in question
            if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                $("a[href='" + theID + "']").parent().addClass("active");
            } else {
                $("a[href='" + theID + "']").parent().removeClass("active");
            }
        }

        if(windowPos + windowHeight == docHeight) {
            if (!$("nav li:last-child a").hasClass("active")) {
                var navActiveCurrent = $(".active").attr("href");
                $("a[href='" + navActiveCurrent + "']").removeClass("active");
                $("nav li:last-child a").addClass("active");
            }
        }
    });
});
</script>

</body>
</html>
