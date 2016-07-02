<?php
  $title = "Bitter Blue Lawn and Garden, Inc";
  $desc = "Preferred Warranty and Repair Center for:
  Home Depot and Lowes extended warranty service center
  Briggs & Stratton Engines and Power Products, Murray";
  $keywords = "Small engine repair, lawn care, serving South Florida for over 30 years, lawn equipment maintenance";
?>

<?php
  include 'components/header.php';
  include 'components/slider.php';
?>

<h2 class="type--heading type--thin type--slate type--underlined type--centered">
  Directions
</h2>

<?php include 'components/map.php'; ?>

<h2 class="type--heading type--thin type--slate type--underlined type--centered">
  About us
</h2>

<p class="text-block">
  Bitter Blue Lawn &amp; Garden has been servicing Broward County for over 30 years in
  the repairs of lawn equipment.  We are very proud to be a retailer of the STIHL
  product line. As an independent Dealer, we can provide many services that the
  big box chain stores just can't match. Our friendly and knowledgeable staff is
  always ready to help you select the equipment that meets your specific needs. We
  can offer fast, professional service for your STIHL equipment after the sale.
  Your equipment comes fully assembled and ready to use, and our staff can give
  you in-store safety and operating demonstrations so that you can get started on
  your tasks as soon as you get home.
</p>

<h2 class="type--heading type--thin type--slate type--underlined type--centered">
  Official dealers of
</h2>

<div class="dealer-logos">
  <img class="dealer-logo" src="../images/logo-stihl.png" alt="Stihl">
  <img class="dealer-logo" src="../images/logo-exmark.png" alt="Exmark">
</div>

<?php
  $loadHomePageScripts = true;
  include 'components/footer.php';
?>

