<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">

            <h1 class="my-4">Rozetka</h1>
            <div class="list-group">
                <? foreach (getMenuItems('menu.txt') as $menuItem) : ?>
                    <a href="category.php?id=<?= $menuItem['id'] ?>"
                       class="list-group-item"><?= $menuItem['name'] ?></a>
                <? endforeach; ?>
            </div>

        </div>
<?php




?>