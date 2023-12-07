<?php
$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "cloud 4 travel"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = mysqli_real_escape_string($conn, $_POST["userid"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "INSERT INTO user (userid, username, email, phone, password) VALUES ('$userid','$username', '$email', '$phone', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!.";
        exit();
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
