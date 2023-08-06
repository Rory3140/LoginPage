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

$error = '';
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
        $error = "Invalid credentials. Please try again.";
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" style>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h1>LOGIN</h1>
        <form action="index.php" method="post" name="statsForm">
            <label for="username">username</label>
            <input class="textbox" type="text" name="username" required>
            <label for="password">password</label>
            <input class="textbox" type="password" name="password" required>
            <input class="button" type="submit" name="submitBtn" value="login">
            <span id="login-error" style="color: red;"></span>
            <label for="submitBtn">don't have an account? <a href="signup.php">Sign Up</a></label>
        </form>
    </div>
</body>

</html>