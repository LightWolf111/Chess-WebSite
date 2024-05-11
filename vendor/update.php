<?php
require_once '../config/connect.php';

    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $login = $_POST['login'];

    mysqli_query($connect, "UPDATE `users` SET  `full_name` = '$full_name', `login` = '$login' WHERE `users`.`id` = '$id'");

header('Location: ../admin-panel.php');
