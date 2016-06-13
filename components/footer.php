    <footer>
      <div class="address">
        <p>
          1621 NW 77 th Way in Pembroke Pines, Florida 33024 <br>
          954 - 981 - 2626 <br>
          bitterbluelawn@gmail.com
        </p>
      </div>

      <div class="office-hours">
        <p>
          Office hours: <br>
          Monday to Friday 8:00 am to 5:00 pm <br>
          Saturdays: 8:00 am to 2:00 pm
        </p>
      </div>

      <div class="copyright">
        <p>Copyright <?php echo date("Y"); ?> BitterBlue</p>
      </div>
    </footer>

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
