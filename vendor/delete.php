<?php
    require_once '../config/connect.php';

    $item_id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM items WHERE `items`.`id` = '$item_id'");

    header('Location: /');