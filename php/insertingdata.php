<?php

$mysqli = new mysqli("localhost", "root", "", "mydb");

if($mysqli === false){
  die("ERROR: Could not connect. ".$mysqli->connect_error);
}

$sql = //"INSERT INTO newsletter (phone_number, email, password) VALUES
            ('722648834', 'charlokim483@gmail.com', 'kiertyguoooo'),
            ('744784783', 'eduwaweru33@gmail.com', 'kifunguoooz'),
            ('789344333', 'joshuacardiff43@gmail.com', 'kifunguozzz'),
            ('742344546', 'harrypotter@mail.com', 'passwordii'),
            ('782456563', 'jorsfghbcaiff43@gmail.com', 'mashafiii')";
if ($mysqli->query($sql) === true){
  echo "Records inserted successfully.";
} else{
  echo "ERROR: Could not able to execute $sql. " .$mysqli->error;
}

$mysqli->close();

?>
