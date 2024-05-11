<?php
session_start();
require_once '../config/connect.php';

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];


if ($password === $password_confirm) {
    $password = md5($password);

  

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `password`) VALUES (NULL, '$full_name', '$login', '$password') ");

    $_SESSION['message'] = 'registration completed successfully!';  
    header('Location: ../login.php');
} else {
    $_SESSION['message'] = 'Password mismatch';
    header('Location: ../register.php');
}
?>
