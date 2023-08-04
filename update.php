<?php 
    $site_title = "CRUD - Изменение товара";

    require_once 'config/divide.php';
    require_once 'blocks/header.php';
    require_once 'config/connect.php';

    $item_id = $_GET['id'];

    $item = mysqli_query($connect, "SELECT * FROM `items` WHERE `items`.`id` = '$item_id'");
    $item = mysqli_fetch_assoc($item);
?>

<main>
    <form action="vendor/update.php" method="post" id="add-item-form">
        <input type="hidden" name="id" value="<?= $item_id ?>">
        <input id="title-add-item-form" type="text" name="title" placeholder="Название" value="<?= $item['title'] ?>">
        <div class="error" id="add-form-title-error"></div><br>
        <textarea id="description-add-item-form" name="description" placeholder="Описание"><?= $item['description'] ?></textarea>
        <div class="error" id="add-form-description-error"></div><br>
        <input id="price-add-item-form" type="number" name="price" placeholder="Цена" value="<?= $item['price'] ?>">
        <div class="error" id="add-form-price-error"></div><br>
        <button type="submit">Добавить</button>
    </form>
</main>

<script src="js\item-form-validate.js"></script>

<?php 
    require_once 'blocks/footer.php';
?>