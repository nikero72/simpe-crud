<?php
    $connect = mysqli_connect('localhost', 'root', '', 'crud');
    if (!$connect) {
        die('Ошибка подключения к базе данных');
    }