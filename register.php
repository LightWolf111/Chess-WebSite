<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: index.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="Website Icon" type="png" href="/images/gm.png">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>

<form action="vendor/signup.php" method="post" enctype="multipart/form-data">

    <h2 style="text-align: center;">Sign up</h2>

    <p></p>
    <label>Username</label>
    <input type="text" name="full_name" required placeholder="Enter your username">
    <label>Login</label>
    <input type="text" name="login" required placeholder="Enter your login">
    <label>Password</label>
    <input type="password" name="password" required  placeholder="Enter password">
    <label>Confirm Password</label>
    <input type="password" name="password_confirm" required placeholder="Confirm your password">
    <button type="submit">Sign up</button>
    <p style="text-align: center;">If you are already registered, <a href="login.php">press here</a>.</p>

    <?php
    if (isset($_SESSION['message'])) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    ?>

</form>


</body>

</html>
