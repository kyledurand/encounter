<?php
  session_start();
  $itunes_link = "http://bit.ly/Encounterapp";
  $number = $_POST['number'];
  $number_trimmed = preg_replace('/\D+/', '', $number);

  // Prepend the country code if missing.
  // Only works for North American users for now.
  if (strlen($number_trimmed) == 10) {
    $number_trimmed = "1{$number_trimmed}";
  }

  require_once "vendor/Twilio/autoload.php";
  use Twilio\Rest\Client;

  $AccountSid = "ACff216318d0954bb4cc9cc99ea254ebfa";
  $AuthToken = "21b30699b2cd4be898bc76906d434f09";

  $client = new Client($AccountSid, $AuthToken);

  $people = array(
    "+{$number_trimmed}" => "User"
  );

  if (isValidNumber($number_trimmed) == true) {
    foreach ($people as $number => $name) {
      $sms = $client->account->messages->create(
        $number,
        array(
          'from' => "+16476915072 ",
          'body' => "💛 Follow this link to download Encounter App and start buying things when you see them: {$itunes_link}"
        )
      );
    }
    $_SESSION['notificationSent'] = true;
  } else {
    $_SESSION['notificationSent'] = false;
  }

  header("Location: http://encounter-app.com");
  exit();
?>
