<?php

//$mysqli = new mysqli("localhost", "root", "", "myDB");
//$host = "localhost";
//$dbusername = "root";
//$dbpassword = "";
//$dbname = "myDB";
$phone_number= filter_input(INPUT_POST, 'phone_number');
$email= filter_input(INPUT_POST, 'email');
$password= filter_input(INPUT_POST, 'password');

if (!empty($email)){
if (!empty($password)){
//Create Connection
$mysqli = new mysqli("localhost", "root", "", "myDB");

if($mysqli === false){
  die("ERROR: Could not connect. ".$mysqli->connect_error);
}
else{
  $sql = "INSERT INTO newsletter (phone_number, email, password)
  VALUES ('$phone_number','$email','$password')";
  if ($mysqli->query($sql)){
    echo "Record Added";
  }
  else{
    echo "Error of adding:" . $sql ."<br>" .$mysqli->error;
  }
}
}
else{
  echo "Password Should not be empty.";
  die();
}
}
else{
  echo "Phone Number should not be empty.";
  die();
}

//if($mysqli === false){
//  die("ERROR: Could not connect. ".$mysqli->connect_error);
//}

/*$sql = "INSERT INTO newsletter (phone_number, email, password) VALUES
            /*('722648834', 'charlokim483@gmail.com', 'kiertyguoooo'),
            ('744784783', 'eduwaweru33@gmail.com', 'kifunguoooz'),
            ('789344333', 'joshuacardiff43@gmail.com', 'kifunguozzz'),
            ('742344546', 'harrypotter@mail.com', 'passwordii'),
            ('782456563', 'jorsfghbcaiff43@gmail.com', 'mashafiii')*/
          //  ";
/* if ($mysqli->query($sql) === true){
  echo "Records inserted successfully.";
} else{
  echo "ERROR: Could not able to execute $sql. " .$mysqli->error;
}
*/
$mysqli->close();

?>
