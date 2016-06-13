<html>
<head>
  <link rel="author" href="https://plus.google.com/114356891358642308105">
  <meta name="author" content="John Gouda">
  <link rel="publisher" href="https://plus.google.com/109851231069854770863">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?= $title; ?></title>
  <meta name="title" content="<?= $title; ?>" />
  <meta name="description" content="<?= $desc; ?>" />
  <meta name="keywords" content="<?= $keywords; ?>" />
  <?
  if ($disallowBots == true) {
    $content = 'noindex';
  } else {
    $content = 'all';
  }
  ?>
  <meta name="robots" content="<?= $content ?>" />
  <meta name="copyright" content="(C) Bitter Blue" />
  <meta name="Copyright" content="Copyright Bitter Blue <?php echo date("Y"); ?>. All Rights Reserved.">
  <meta name="DC.title" content="<?= $title; ?>">
  <meta name="DC.subject" content="Medical Disposal Service Provider">
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" type="image/png" href="favicon.png" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
</head>

<body itemscope itemtype="https://schema.org/LocalBusiness">
  <?php include "components/icons.php" ?>
  <div class="page">
    <header>
      <div class="repeatable-grass">
        <a href="tel:9549812626" class="button--header phone">
          <span class="is-hidden-and-accessible">Telephone</span>
          <svg class="icon icon--medium icon--white">
            <use xlink:href="#icon--phone" />
          </svg>
        </a>

        <h1 class="logo">
          <span class="is-hidden-and-accessible">Bitter blue lawn and garden</span>
          <img src="images/logo.png" alt="Bitter Blue Lawn and garden">
        </h1>

        <button class="button--header menu" data="menu-trigger">
          <span class="is-hidden-and-accessible">Open menu</span>
          <svg class="icon icon--small icon--white">
            <use xlink:href="#icon--menu" />
          </svg>
        </button>

        <nav>
          <div class="menu--condensed">
            <h2 class="menu__title type--heading type--large type--bold type--uppercase type--slate">Menu</h2>
            <button class="button--header close" data="menu-dismiss">
              <span class="is-hidden-and-accessible">Close menu</span>
              <svg class="icon icon--small icon--white">
                <use xlink:href="#icon--dismiss" />
              </svg>
            </button>

            <ul class="list list--right-aligned">
              <?php include 'components/menu.php' ?>
              <li>
                <p>
                  1621 NW 77 th Way <br>
                  Pembroke Pines<br>
                  Florida 33024<br>
                  954 - 981 - 2626<br>
                  bitterbluelawn@gmail.com<br>
                </p>
              </li>
            </ul>
          </div>
        </div>

        <div class="menu--expanded">
          <ul class="list line--inline list--flex">
            <?php $menuVersion = 'expanded' ?>
            <?php include 'components/menu.php' ?>
          </ul>
        </div>
      </nav>
    </header>

