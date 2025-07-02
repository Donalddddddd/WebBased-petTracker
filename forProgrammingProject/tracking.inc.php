<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

  $suggestion = htmlspecialchars($_POST["suggestion"], ENT_QUOTES, 'UTF-8');


  include "dbh.classes.php";
  include "tracking.classes.php";
  include "tracking.contr.classes.php";
  $trackingInfo = new trackingContr($suggestion);

  $trackingInfo->updateTracking($suggestion);

  header("location: tracking.php?error=none");
}
