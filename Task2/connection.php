<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$id=$_POST['id'];
$rigth=$_POST['right'];
$left=$_POST['left'];
$forward=$_POST['forward'];
$backward=$_POST['backward'];
$stop=$_POST['stop'];
}


// Create connection
$conn = new mysqli('localhost','root','','Arms');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{$stmt=$conn->prepare("insert into controlpanel(right,left,forward,backward,stop)value(?,?,?,?,?,?)");

$stmt->bind_param("iiiiii",$right,$left,$forward,$backward,$stop); 
$stmt->execute();
$stmt->close();
$conn->close();

}


?>