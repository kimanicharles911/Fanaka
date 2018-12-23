<?php

$typeofcake = file_input(INPUT_POST, "typeofcake");
$typeofflavor = file_input(INPUT_POST, "typeofflavor");
$icingcolordescription = file_input(INPUT_POST, "icingcolordescription");
$uploadacakedesignexample = file_input(INPUT_POST, "uploadacakedesignexample");
$cakedescriptionmessage = file_input(INPUT_POST, "cakedescriptionmessage");
$ddate = file_input(INPUT_POST, "ddate");
$nairobiconstituencies = file_input(INPUT_POST, "nairobiconstituencies");
$kiambuconstituencies = file_input(INPUT_POST, "kiambuconstituencies");
$nearbyshoppingcenterorward = file_input(INPUT_POST, "nearbyshoppingcenterorward");
$fullnames = file_input(INPUT_POST, "fullnames");
$phonenumber = file_input(INPUT_POST, "phonenumber");
$email = file_input(INPUT_POST, "email");

//Creating Connnection
$mysqli=new mysqli("localhost", "root", "","myDB");

if($mysqli === false){
  die("Error: Could not connect. " .$mysqli->connect_error);
}
else{
  $sql = "INSERT INTO corporateeventcakes (typeofcake, typeofflavor, icingcolordescription,
    uploadacakedesignexample, cakedescriptionmessage, ddate,
    nairobiconstituencies, kiambuconstituencies, nearbyshoppingcenterorward,
    fullnames, phonenumber, email)"
    VALUES ('$typeofcake', '$typeofflavor', '$icingcolordescription',
    '$uploadacakedesignexample', '$cakedescriptionmessage', '$ddate',
    '$nairobiconstituencies', '$kiambuconstituencies', '$nearbyshoppingcenterorward',
    '$fullnames', '$phonenumber', '$email');
    if  ($mysqli->query($sql)){
      echo "Corporate Event Cakes Records Added";
    }
    else{
      echo "ERROR Adding Corporate Event Cakes Records" .$sql ."<br>" .$mysqli->error;
    }
}

$mysqli->close();
?>
