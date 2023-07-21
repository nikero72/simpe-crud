<?php
    $site_title = "CRUD - Главная";
    require_once 'blocks/header.php';
    require_once 'config/connect.php';

    $items = mysqli_query($connect, "SELECT * FROM `items`");
    $items = mysqli_fetch_all($items);
?>

<aside>
    <div class="aside"
</aside>

<main>
    <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Просмотр</th>
            <th>Изменить</th>
            <th>Удалить</th>
        </tr>
        <?php 
        foreach ($items as $value) {
            ?>
                <tr>
                    <td><?= $value[0] ?></td>
                    <td><?= $value[1] ?></td>
                    <td><?= $value[2] ?></td>
                    <td><?= $value[3] ?></td>
                    <td><a href="view.php?id=<?= $value[0] ?>">Посмотреть</a></td>
                    <td><a href="update.php?id=<?= $value[0] ?>">Изменить</a></td>
                    <td><a href="vendor/delete.php?id=<?= $value[0] ?>">Удалить</a></td>
                </tr>
            <?php
        }
        ?>
    </table><br>

    <form action="vendor/create.php" method="post">
        <input type="text" name="title" placeholder="Название"><br><br>
        <textarea name="description" placeholder="Описание"></textarea><br><br>
        <input type="number" name="price" placeholder="Цена"><br><br>
        <button type="submit">Создать</button>

    </form>
</main>


<?php 
    require_once 'blocks/footer.php';
?>

