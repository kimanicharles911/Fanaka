<?php

$typeofevent= filter_input(INPUT_POST, 'typeofevent')
$ddate= filter_input(INPUT_POST, 'ddate');
$timetoserve= filter_input(INPUT_POST, 'timetoserve');
$numberofpeople= filter_input(INPUT_POST, 'numberofpeople');
$methodtoserve= filter_input(INPUT_POST, 'methodtoserve');
$numberofhightables= filter_input(INPUT_POST, 'numberofhightables');
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
  $sql = "INSERT INTO reservation (typeofevent, ddate, timetoserve, numberofpeople,
    methodtoserve, numberofhightables, nairobiconstituencies, kiambuconstituencies,
    nearbyshoppingcenterorward, fullnames, phonenumber, email)"
    VALUES ('$typeofevent',  '$ddate', '$timetoserve', '$numberofpeople', '$methodtoserve', '$numberofhightables',
    '$nairobiconstituencies', '$kiambuconstituencies', '$nearbyshoppingcenterorward', '$fullnames', '$phonenumber',
    '$email');

if  ($mysqli->query($sql)){
  echo "Wedding Cakes Records Added";
  }
  else{
    echo "ERROR Adding Wedding Cakes Records" .$sql ."<br>" .$mysqli->error;
  }
}

$mysqli->close();
?>
