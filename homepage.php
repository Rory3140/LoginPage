<?php
session_start(); // Start the session

// Check if the user is logged in (userid is stored in the session)
if (!isset($_SESSION['userid'])) {
    // User is not logged in, redirect to the login page
    header('Location: index.php');
    exit;
}

// Access the userid and username from the session
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en" style>

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container" id="homecont">
        <h1>HOME</h1>
        <h2>Welcome,
            <?php echo $username; ?>
        </h2>
        <p>Your userid is:
            <?php echo $userid; ?>
        </p>
    </div>
</body>

</html>