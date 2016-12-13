<?php session_start(); ?>
<!doctype html>
<html>
  <head>
    <link rel="author" href="https://plus.google.com/114356891358642308105">
    <meta name="author" content="John Gouda">
    <link rel="publisher" href="https://plus.google.com/109851231069854770863">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Encounter app</title>
    <meta name="title" content="Encounter app" />
    <meta name="description" content="Buy things when you see them" />
    <meta name="keywords" content="A more human way to shop" />
    <?php
      if ($disallowBots == true) {
        $content = 'noindex';
      } else {
        $content = 'all';
      }
    ?>
    <meta name="robots" content="<?= $content ?>" />
    <meta name="copyright" content="(C) Encounter app" />
    <meta name="Copyright" content="Copyright Encounter app <?php echo date("Y"); ?>. All Rights Reserved.">
    <meta name="DC.title" content="<?= $title; ?>">
    <meta name="DC.subject" content="En">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/main.css?<?php echo(date("s")) ?>">
  </head>
  <body>
    <div class="site-container">

      <?php include "components/icons.php" ?>

      <div class="hero">
        <div class="wrapper">
          <header class="site-header">
            <h1 class="site-title-heading">
              <a href="/" class="logo">
                <span class="is-hidden-and-accessible" aria-hidden="true">Encounter app</span>
                <svg aria-labelledby="logo" role="img" class="logo">
                  <title id="logo">Encounter logo</title>
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use>
                </svg>
              </a>
            </h1>
          </header>

          <div class="hero__cta">
            <h1 class="type-heading--large">A more human way to shop.</h1>
            <h2 class="type-heading--small">Buy things when you see them.</h2>

            <label for="number" class="cta__label cta--non-mobile">Text me a link to the app:</label>
            <form method="post" action="sendnotifications.php" class="inline-input inline-input--left-justified flex-start cta--non-mobile">
              <input type="tel" class="input--inline" name="number" value="" placeholder="Your phone number" autocomplete="on" required>
              <input type="submit" value="Send" class="button button--inline">
            </form>

            <?php
              if (isset($_SESSION['notificationSent'])) {
                if ($_SESSION['notificationSent']) {
                  echo "<div class='success cta--non-mobile'>Message sent!</div>";
                } else {
                  echo "<div class='failure cta--non-mobile'>Message not sent. Please check your your number format and try again.</div>";
                }
              }
            ?>

            <a class="button button--shadow cta--mobile" href="http://bit.ly/Encounterapp">
              <svg aria-labelledby="apple-icon" role="img" class="icon--small">
                <title id="apple-icon">App store link</title>
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#apple-logo"></use>
              </svg>
              <span class="button__text button__text-with-icon">Download Free App</span>
            </a>
          </div>

          <div class="hero__phone">
            <img src="images/phone.png" alt="App preview on a device">
          </div>
        </div>

        <div class="hero-block hero__block-right-1"></div>
        <div class="hero-block hero__block-right-2"></div>
        <div class="hero-block hero__block-left-1"></div>
        <div class="hero-block hero__block-left-2"></div>
      </div>

      <!-- end hero -->

      <div class="outer-wrapper--gray-light">
        <div class="wrapper--no-horizontal-spacing text-center">
          <div class="text-center">
            <h2 class="type-sub-heading">Features</h2>
          </div>

          <div class="card">
            <svg aria-labelledby="fast" role="img" class="card__icon">
              <title id="fast">Fast</title>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fast"></use>
            </svg>

            <h3 class="type-heading--card">Fast.</h3>
            <p class="card__blurb">No more search. Automagically see items you see in person, on your smartphone.</p>
          </div>

          <div class="card">
            <svg aria-labelledby="convenient" role="img" class="card__icon">
              <title id="convenient">Convenient</title>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#convenient"></use>
            </svg>

            <h3 class="type-heading--card">Convenient.</h3>
            <p class="card__blurb">Order on your smartphone, get it delivered home.</p>
          </div>

          <div class="card">
            <svg aria-labelledby="fair" role="img" class="card__icon">
              <title id="fair">Fair</title>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#fair"></use>
            </svg>

            <h3 class="type-heading--card">Fair.</h3>
            <p class="card__blurb">Our prices are identical to official retailers.</p>
          </div>
        </div>
      </div>

      <div class="wrapper--no-left-spacing">
        <div class="offset-feature">
          <div class="offset-blurbs">
            <h3 class="type-heading--feature">Beautiful.</h3>
            <p>Only original products. No cheap copies and knock-offs.</p>
            <hr class="offset">
            <h3 class="type-heading--feature">Human.</h3>
            <p>Touch, feel and see products within their authentic context.</p>
            <hr class="offset">
          </div>
        </div>
      </div>

      <section class="wrapper text-center">
        <hr>
      </section>

      <div class="wrapper text-center">
        <h3 class="type-heading--large">100+ Venues in Toronto</h3>
        <h4 class="type-heading--small">Where do you want us to go next?</h4>

        <form class="inline-input" target="_self" onsubmit="" action="javascript: submitFormToGoogle()">
          <input class="input--inline" type="text" id="location" placeholder="Enter your city">
          <button class="button button--inline" type="submit">Submit</button>
        </form>
      </div>

      <div class="outer-wrapper--gray-light">
        <div class="locations-feature">
          <div class="location location-1">
            <svg aria-labelledby="LocationPin" role="img" class="location-pin">
              <title id="LocationPin">Location</title>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pin"></use>
            </svg>
            <span class="locations-feature__text">Chair at Dineen Coffee</span>
          </div>

          <div class="location location-2">
            <svg aria-labelledby="LocationPin" role="img" class="location-pin">
              <title id="LocationPin">Location</title>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pin"></use>
            </svg>
            <span class="locations-feature__text">Vase at Breather</span>
          </div>

          <div class="location location-3">
            <svg aria-labelledby="LocationPin" role="img" class="location-pin">
              <title id="LocationPin">Location</title>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pin"></use>
            </svg>
            <span class="locations-feature__text">Sphere Light at Ricarda's</span>
          </div>

          <div class="location location-4">
            <svg aria-labelledby="LocationPin" role="img" class="location-pin">
              <title id="LocationPin">Location</title>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pin"></use>
            </svg>
            <span class="locations-feature__text">Pendant at Rooster Coffee</span>
          </div>
        </div>

        <div class="outer-wrapper--gray-light text-center">
          <h3 class="type-heading--large">Download Encounter now.</h3>
          <h4 class="type-heading--small">And buy things when you see them.</h4>

          <label for="number" class="cta__label cta--non-mobile cta--center">Text me a link to the app:</label>
          <form method="post" action="sendnotifications.php" class="inline-input cta--non-mobile">
            <input type="tel" class="input--inline" name="number" value="" placeholder="Your phone number" autocomplete="on" required>
            <input type="submit" value="Send" class="button button--inline">
          </form>

          <?php
            if ($_SESSION['notificationSent'] == TRUE) {
              echo "<div class='success cta--non-mobile cta--center'>Message sent!</div>";
            }
          ?>

          <a class="button button--shadow button--center cta--mobile" href="http://bit.ly/Encounterapp">
            <svg aria-labelledby="apple-icon" role="img" class="icon--small">
              <title id="apple-icon">App store link</title>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#apple-logo"></use>
            </svg>
            <span class="button__text button__text-with-icon">Download Free App</span>
          </a>
        </div>
      </div>

      <div class="outer-wrapper--gray-light">
        <div class="menu">
          <ul class="menu__list">
            <li class="menu__item type-menu">
              <button type="button" onclick="openModal('Faq')">FAQ</button>
            </li>
            <li class="menu__item type-menu">
              <button type="button" onclick="openModal('Privacy')">Privacy policy</button>
            </li>
            <li class="menu__item type-menu">
              <button type="button" onclick="openModal('Terms')">Terms of service</button>
            </li>
          </ul>
        </div>
      </div>

      <div class="outer-wrapper--gray-light">
        <div class="text-center social">
          <a href="https://www.instagram.com/encounter_app/" target="_blank">
            <svg aria-labelledby="instagram" role="img" class="icon--medium">
              <title id="instagram">Instagram logo</title>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#instagram"></use>
            </svg>
          </a>

          <a href="https://www.facebook.com/encounterinc" target="_blank">
            <svg aria-labelledby="twitter" role="img" class="icon--medium">
              <title id="twitter">Twitter logo</title>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use>
            </svg>
          </a>
        </div>

        <div class="wrapper__section last-item">
          <div class="copy text-center"><?php echo(date("Y")) ?> Encounter Inc. All rights Reserved.</div>
        </div>
      </div>
    </div>

    <div class="modal-backdrop">
      <div id="Faq" class="modal__page"><?php include 'components/faq.php' ?></div>
      <div id="Privacy" class="modal__page"><?php include 'components/privacy.php' ?></div>
      <div id="Terms" class="modal__page"><?php include 'components/terms_of_service.php' ?></div>
    </div>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js?<?php echo(date("s")) ?>"></script>
  </body>
</html>
<?php session_destroy(); ?>
