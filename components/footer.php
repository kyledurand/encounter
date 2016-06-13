    <script src='js/vendor/classie.js' type="text/javascript"></script>
    <script src='js/app.js' type="text/javascript"></script>


    <?php if ($loadHomePageScripts == true) ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/vendor/slides.js"></script>
    <script>
     $(function(){
      $('#slides').slides({
       preload: true,
       effect: 'fade',
       crossfade: true,
       play: 4500,
       pause: 2500,
       hoverPause: true
     });
    });
    </script>
    <?php?>
  </div>
</body>
</html>
