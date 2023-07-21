<?php 
    require_once '../config/connect.php';

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $id = $_POST['id'];

    mysqli_query($connect, "UPDATE `items` SET `title` = '$title', `description` = '$description', `price` = '$price' WHERE `items`.`id` = '$id'");

    header('Location: /');
