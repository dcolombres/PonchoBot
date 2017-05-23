<?= js('assets/js/jquery.min.js') ?>
<?= js('assets/js/copiarCodigo.js') ?>
<script>

  // IOS FIX FOR FULL HEIGHT JUMBO
  if ($(window).width() < 769) {

    var bg = $(".intro");
    function resizeBackground() {
        bg.css('height', window.innerHeight - 64);
        bg.css('min-height', window.innerHeight - 64);
    }

    resizeBackground();
  };

</script>

<script>
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?= js('assets/js/activateAnimations.js') ?>
<?= js('assets/js/custom.js') ?>


</body>
</html>
