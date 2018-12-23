<?php

$name = file_input(INPUT_POST, name);
$phonenumber = file_input(INPUT_POST, phonenumber);
$message = file_input(INPUT_POST, message);
$email = file_input(INPUT_POST, email);

//Creating Connnection
$mysqli=new mysqli("localhost", "root", "","myDB");

if($mysqli === false){
  die("Error: Could not connect. " .$mysqli->connect_error);
}
else{
  $sql = "INSERT INTO contactfanakaadmin (name, phonenumber, email, message)"
    VALUES ('$name', '$phonenumber', '$email', '$message');

if  ($mysqli->query($sql)){
  echo "Message Record Added";
  }
  else{
    echo "ERROR Adding Message to Records" .$sql ."<br>" .$mysqli->error;
  }
}

$mysqli->close();

?>
