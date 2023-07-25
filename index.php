<?php
    $site_title = "CRUD - Главная";

    require_once 'config/divide.php';
    require_once 'blocks/header.php';
    require_once 'config/connect.php';

    $items = mysqli_query($connect, "SELECT * FROM `items`");
    $items = mysqli_fetch_all($items);
?>



<main>
    <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php 
        foreach ($items as $value) {
            ?>
                <tr>
                    <td><?= $value[0] ?></td>
                    <td><?= $value[1] ?></td>
                    <td><?= $value[2] ?></td>
                    <td><?= $value[3] ?></td>
                    <td class="icons" title="Просмотр"><a href="view.php?id=<?= $value[0] ?>">&#x1f441;</a></td>
                    <td class="icons" title="Изменить"><a href="update.php?id=<?= $value[0] ?>">✎</a></td>
                    <td class="icons" title="Удалить"><a href="vendor/delete.php?id=<?= $value[0] ?>">&#128465;</a></td>
                </tr>
            <?php
        }
        ?>
    </table>


    <p class="form-header">Добавление нового товара</p>

    <form action="vendor/create.php" method="post">
        <input type="text" name="title" placeholder="Название" id="create-title-input-field"><br><br>
        <textarea name="description" placeholder="Описание"></textarea><br><br>
        <input type="number" name="price" placeholder="Цена"><br><br>
        <button type="submit">Добавить</button>
    </form>
</main>


<?php 
    require_once 'blocks/footer.php';
?>

