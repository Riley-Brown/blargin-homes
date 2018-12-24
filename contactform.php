<?php 


if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $tel = $_POST['tel'];
  $propertyType = $_POST['property-type'];
  $propertyListed = $_POST['property-listed'];
  $askingPrice = $_POST['asking-price'];

  $mailTo = "form@blarginhomes.com";
  $headers = "From: " . $mailFrom;
    // $txt = "You have recieved an email from " . $name . ".\n\n" . $mailFrom . ".\n\n" . $message;
  $txt = "You have recieved an email from {$name} \n\n Email: {$mailFrom} \n\n Property Address: {$address} \n\n City: {$city} \n\n State: {$state} \n\n Zipcode: {$zip} \n\n Phone Number: {$tel} \n\n Property Type: {$propertyType} \n\n Property Listed on MLS?: {$propertyListed} \n\n Asking Price: {$askingPrice}";


  mail($mailTo, $subject, $txt, $headers);

  header("Location:  thanks.html");

}