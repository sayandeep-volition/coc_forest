<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start the session
session_start();

$value = true;


$servername = "localhost";
// $username = "carbotli_coc"; 
// $password = "RPq?kGz5^x8X^]a"; 
// $dbname = "carbotli_teamvolition";

$username = "root"; 
$password = ""; 
$dbname = "team_volition";

// Create connection
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



// Check connection
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Collect post data
$name = $_POST['name'];
$company_name = $_POST['company_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$message = $_POST['message'];
$id = rand();
$assigned = "4109ae60-1160-11ed-86e6-ff92fb3808de";
// Insert form data into the database
// $sql = "INSERT INTO leads_management (id, name, company_name, phone, email, purpose) 
// VALUES ('$id','$name', '$company_name', '$phone_number', '$email', '$message')";

$sql = "INSERT INTO leads_management (id, name, company_name, phone, email, purpose, assigned_lead_manager, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$insert_status = $stmt->execute([$id, $name, $company_name, $phone_number, $email, $message, $assigned, 'Lead ongoing']);


if ($insert_status) {
    $value = true;
    header("Location: index.php#msg");
    
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  $value = false;
  header("Location: index.php#msg");
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
