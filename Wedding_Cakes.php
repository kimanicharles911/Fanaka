<?php

$typeofcake= filter_input(INPUT_POST, 'typeofcake');
$typeofflavor= filter_input(INPUT_POST, 'typeofflavor');
$icingcolordescription= filter_input(INPUT_POST, 'icingcolordescription');
$uploadaweddingcakedesignexample= filter_input(INPUT_POST, 'uploadaweddingcakedesignexample');
$cakedescriptionmessage= filter_input(INPUT_POST, 'cakedescriptionmessage');
$ddate= filter_input(INPUT_POST, 'ddate');
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
  $sql = "INSERT INTO weddingcake (typeofcake, typeofflavor, icingcolordescription, uploadaweddingcakedesignexample, cakedescriptionmessage,
     ddate, nairobiconstituencies, kiambuconstituencies, nearbyshoppingcenterorward, fullnames, phonenumber, email)"
    VALUES ('$typeofcake', '$typeofflavor', '$icingcolordescription', '$uploadaweddingcakedesignexample',
    '$cakedescriptionmessage', '$ddate', '$nairobiconstituencies', '$kiambuconstituencies', '$nearbyshoppingcenterorward', '$fullnames', '$phonenumber', '$email');
    if  ($mysqli->query($sql)){
      echo "Wedding Cakes Records Added";
    }
    else{
      echo "ERROR Adding Wedding Cakes Records" .$sql ."<br>" .$mysqli->error;
    }
}

$mysqli->close();

?>
