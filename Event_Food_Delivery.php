<?php

$typeofevent= filter_input(INPUT_POST, 'typeofevent')
$ddate= filter_input(INPUT_POST, 'ddate');
$timetodeliver= filter_input(INPUT_POST, 'timetodeliver');
$numberofpeople= filter_input(INPUT_POST, 'numberofpeople');
$nairobiconstituencies= filter_input(INPUT_POST, 'nairobiconstituencies');
$kiambuconstituencies= filter_input(INPUT_POST, 'kiambuconstituencies');
$nearbyshoppingcenterorward= filter_input(INPUT_POST, 'nearbyshoppingcenterorward');
$fullnames= filter_input(INPUT_POST, 'fullnames');
$phonenumber= filter_input(INPUT_POST, 'phonenumber');
$email= filter_input(INPUT_POST, 'email');

//Creating Connnection
$mysqli=new mysqli("localhost", "root", "","myDB");

if($mysqli === false){
  die("Error: Could not connect. " .$mysqli->connect_error);
}
else{
  $sql = "INSERT INTO eventfooddelivery (typeofevent, ddate, timetodeliver, numberofpeople,
    nairobiconstituencies, kiambuconstituencies,nearbyshoppingcenterorward,
    fullnames, phonenumber, email)"
    VALUES ('$typeofevent',  '$ddate', '$timetodeliver', '$numberofpeople', '$nairobiconstituencies',
    '$kiambuconstituencies', '$nearbyshoppingcenterorward', '$fullnames', '$phonenumber', '$email');

if  ($mysqli->query($sql)){
  echo "Event Food Delivery Records Added";
  }
  else{
    echo "ERROR Adding Event Food Delivery Records" .$sql ."<br>" .$mysqli->error;
  }
}

$mysqli->close();
?>
