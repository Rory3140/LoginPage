<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process login form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database to check if the provided credentials are valid
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Login successful, redirect to homepage.html
        header('Location: homepage.html');
        exit;
    } else {
        echo "Invalid credentials. Please try again.";
    }
}

// Close the database connection
mysqli_close($conn);
?>