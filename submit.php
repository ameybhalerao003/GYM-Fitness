<?php
// Database credentials
$host = "localhost";
$dbname = "gymfitnessn";
$username = "root";
$password = ""; // Replace with your database password

$first_name=$_POST["Fname"];
    $last_name= $_POST["Lname"];
    $gender = $_POST["gender"];
    $email =$_POST ['email'];
    $phone =$_POST ['phone'];
    $pass = $_POST ['password'];

try {
    // Create a new PDO instance
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statement to insert data
    $sql = "INSERT INTO regform (First_name,Last_name, gender, Email,Phone) VALUES ('$first_name', '$last_name', '$gender', '$email', '$phone', '$pass')";
    $stmt = $db->prepare($sql);

    // Execute the SQL statement
    $stmt->execute();

    echo "Data inserted successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
