<?php
$Photographer_id = filter_input(INPUT_POST, "Photographer_id");
$location = filter_input(INPUT_POST, "location");
$photographer = filter_input(INPUT_POST, "photographer");
$date= filter_input(INPUT_POST, "date");
$time = filter_input(INPUT_POST, "time");
$duration= filter_input(INPUT_POST, "duration");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cloud 4 travel";


$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_error()) {
  die('Connection failed:  ('. mysqli_connect_error() .') ' .mysqli_connect_error());

 }
 else{
  $sql = "INSERT INTO `photographer`(`Photographer_id`, `location`, `photographer`, `date`, `time`, `duration`) 
  VALUES ('$Photographer_id ','$location','$photographer','$date=', '$time', '$duration')";
  if ($conn->query($sql)){
    echo "Photographer booking successfully";
 }
 else{
  echo "Error: ".$sql."<br>" . $conn->error;
 }
 $conn->close();
}
 ?>