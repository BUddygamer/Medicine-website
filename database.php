<?php

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "cj";

// Establish connection
$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    $email = $_POST['email'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    // Prepare and bind
    $sql = "INSERT INTO users (username, password, email, age, address) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }

    $stmt->bind_param("sssis", $username, $password, $email, $age, $address);

    if ($stmt->execute()) {
        echo "Registration successful.";
        header("Location: home1.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error 405! Request method not allowed.";
}

$conn->close();

?>
