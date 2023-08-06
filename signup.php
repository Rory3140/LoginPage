<!DOCTYPE html>
<html lang="en" style>

<head>
    <title>Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h1>SIGN UP</h1>
        <form action="POST">
            <label for="username">username</label>
            <input class="textbox" type="text" name="username" required>
            <label for="email">email</label>
            <input class="textbox" type="text" name="email" required>
            <label for="password">password</label>
            <input class="textbox" type="password" name="password" required>
            <label for="retypePassword">re-type password</label>
            <input class="textbox" type="password" name="retypePassword" required>
            <input class="button" type="submit" name="submitBtn" value="submit">
            <label for="submitBtn">already have an account? <a href="index.php">Login</a></label>
        </form>
    </div>
</body>

</html>