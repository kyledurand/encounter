<?php
  session_start();
  $itunes_link = "https://itunes.apple.com/ca/app/encounter-buy-things-when/id1088706016?mt=8";
  $number = $_POST['number'];
  $number_trimmed = preg_replace('/\D+/', '', $number);

  require_once "vendor/Twilio/autoload.php";
  use Twilio\Rest\Client;

  $AccountSid = "ACe5536c82a90c07af1416912ad480567d";
  $AuthToken = "867fec41bdf3d76d94325dcbaecffb80";

  $client = new Client($AccountSid, $AuthToken);

  $people = array(
    "+{$number_trimmed}" => "User"
  );

  foreach ($people as $number => $name) {

    $sms = $client->account->messages->create(
      $number,
      array(
        'from' => "+13437005697",
        'body' => "Hey! Here's that app store link we promised {$itunes_link}"
        )
      );
    $_SESSION['notificationSent'] = true;
    header("Location: http://kyledurand.ca/encounter/");
    exit();
  }
?>
