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

  <a href="tel:9549812626" class="button--header phone">
    <span class="is-hidden-and-accessible">Telephone</span>
    <svg class="icon icon--small icon--white">
      <use xlink:href="#icon--phone" />
    </svg>
  </a>

  <button class="button--header menu">
    <span class="is-hidden-and-accessible">Menu</span>
    <svg class="icon icon--small icon--white">
      <use xlink:href="#icon--menu" />
    </svg>
  </button>

  <nav class="menu--condensed">
    <ul>
      <li></li>
    </ul>
  </nav>
