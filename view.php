<?php 
    $site_title = "CRUD - Просмотр товара";

    require_once 'config/divide.php';
    require_once 'blocks/header.php';
    require_once 'config/connect.php';

    $item_id = $_GET['id'];

    $item = mysqli_query($connect, "SELECT * FROM `items` WHERE `items`.`id` = '$item_id'");
    $item = mysqli_fetch_assoc($item);

    $comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `comments`.`item_id` = '$item_id'");
    $comments = mysqli_fetch_all($comments);
?>

<main>
    <div id="view-item">
        <h3><?= $item['title'] ?></h3>
        <p><?= $item['description'] ?></p>
        <p><b>Цена: </b><?= $item['price'] ?></p>
    </div>


    <p class="form-header">Добавить комментарий</p>

    <form id="comment-form" action="vendor/comment.php" method="post">
        <input type="hidden" name="item_id" value="<?= $item_id ?>">
        <textarea id="add-comment" name="comment" placeholder="Комментарий"></textarea>
        <div class="error" id="add-comment-error"></div><br>
        <button type="submit">Отправить</button>
    </form>
</main>

<div id="view-comments"> 
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
</div>

<script src="js\comment-form-validate.js"></script>

<?php 
    require_once 'blocks/footer.php';
?>