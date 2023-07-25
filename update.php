<?php 
    $site_title = "CRUD - Изменение товара";

    require_once 'config/divide.php';
    require_once 'blocks/header.php';
    require_once 'config/connect.php';

    $item_id = $_GET['id'];

    $item = mysqli_query($connect, "SELECT * FROM `items` WHERE $item_id");
    $item = mysqli_fetch_assoc($item);
?>

<main>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $item_id ?>">
        <input type="text" name="title" placeholder="Название" value="<?= $item['title'] ?>"><br><br>
        <textarea name="description" placeholder="Описание"><?= $item['description'] ?></textarea><br><br>
        <input type="number" name="price" placeholder="Цена" value="<?= $item['price'] ?>"><br><br>
        <button type="submit">Изменить</button>
    </form>
</main>

<?php 
    require_once 'blocks/footer.php';
?>