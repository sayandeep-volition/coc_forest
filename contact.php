<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start the session
session_start();

$value = true;


$servername = "localhost";
$username = "carbotli_teamvolition"; 
$password = "jzqfZTnAxjkQ"; 
$dbname = "carbotli_teamvolition";

// $username = "root"; 
// $password = ""; 
// $dbname = "team_volition";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect post data
$name = $_POST['name'];
$company_name = $_POST['company_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$message = $_POST['message'];
$id = rand();
// Insert form data into the database
$sql = "INSERT INTO leads_management (id, name, company_name, phone, email, purpose) 
VALUES ('$id','$name', '$company_name', '$phone_number', '$email', '$message')";

echo $sql; die;

if ($conn->query($sql) === TRUE) {
    $value = true;
    header("Location: index.php");
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  $value = false;
  header("Location: index.php");
}
$_SESSION['value'] = $value;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $companyName = $_POST['company_name'];
    $phoneNumber = $_POST['phone_number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "sayandeep.majumdar@volitionllp.com";
    $subject = "New Contact Form Submission";
    $messageBody = "Name: $name\n";
    $messageBody .= "Company Name: $companyName\n";
    $messageBody .= "Phone Number: $phoneNumber\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Message:\n$message\n";

    $headers = "From: info@forestecocertification.com";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
exit; 
?>
