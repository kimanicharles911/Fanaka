<?php

$ddate= filter_input(INPUT_POST, 'ddate');
$timetodeliver= filter_input(INPUT_POST, 'timetodeliver');
$numberoforders= filter_input(INPUT_POST, 'numberoforders');
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
  $sql = "INSERT INTO homefooddelivery (ddate, timetodeliver, numberoforders,
    nairobiconstituencies, kiambuconstituencies,nearbyshoppingcenterorward,
    fullnames, phonenumber, email)"
    VALUES ('$ddate', '$timetodeliver', '$numberoforders', '$nairobiconstituencies',
    '$kiambuconstituencies', '$nearbyshoppingcenterorward', '$fullnames', '$phonenumber', '$email');

if  ($mysqli->query($sql)){
  echo "Home Food Delivery Records Added";
  }
  else{
    echo "ERROR Adding Home Food Delivery Records" .$sql ."<br>" .$mysqli->error;
  }
}

$mysqli->close();
?>
