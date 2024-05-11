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
    <title>Login</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="Website Icon" type="png"
    href="/images/gm.png">
</head>
<body>

    <form action="vendor/signin.php" method="post">
    <h2 style="text-align: center;">Login</h2>
    <p></p>
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter your login">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter password">
        <button type="submit">Sign in</button>
        <p style="text-align: center;">If you are not registered yet, <a href="register.php">press here</a>.</p>
       <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
           }
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>