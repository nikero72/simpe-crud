<?php 
    $site_title = "CRUD - Просмотр товара";
    require_once 'blocks/header.php';
    require_once 'config/connect.php';

    $item_id = $_GET['id'];

    $item = mysqli_query($connect, "SELECT * FROM `items` WHERE `items`.`id` = '$item_id'");
    $item = mysqli_fetch_assoc($item);

    $comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `comments`.`item_id` = '$item_id'");
    $comments = mysqli_fetch_all($comments);
?>

<a href="/">Главная</a><br>

<h3><?= $item['title'] ?></h3>
<p><?= $item['description'] ?></p>
<p><b>Цена: </b><?= $item['price'] ?></p>
<hr>


<h4>Добавить комментарий</h4>
<form action="vendor/comment.php" method="post">
    <input type="hidden" name="item_id" value="<?= $item_id ?>">
    <textarea name="comment" placeholder="Комментарий"></textarea><br><br>
    <button type="submit">Отправить</button>
</form>
<hr>

<ul>
    <?php
        foreach ($comments as $value) {
    ?>
        <li><?= $value[2] ?></li>
    <?php
        } 
    ?>
</ul>


<?php 
    require_once 'blocks/footer.php';
?>