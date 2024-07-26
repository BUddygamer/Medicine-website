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

    // Prepare and bind
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);

    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }

    $stmt->bind_param("ss", $username, $password);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Credentials are correct, start a session and redirect to home page
        session_start();
        $_SESSION['username'] = $username;
        echo "Login successful.";
        header("Location: home1.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
} else {
    echo "Error 405! Request method not allowed.";
}

$conn->close();

?>
