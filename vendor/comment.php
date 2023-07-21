<?php 
    require_once '../config/connect.php';

    $item_id = $_POST['item_id'];
    $comment = $_POST['comment'];

    mysqli_query($connect, "INSERT INTO `comments` (`id`, `item_id`, `comment`) VALUES (NULL, '$item_id', '$comment');");

    header("Location: /view.php?id=$item_id");