<?php
require_once './Category.php';
$catem = new Category();
$cate = $catem->all();
// echo "<pre>";
// var_dump($cate);
?>
<table border="1" style="color: black;">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Slug</th>
        <th><a href="">them</a></th>
    </thead>
    <tbody>
        <?php foreach ($cate as $c) : ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= $c['cate_name'] ?></td>
                <td><?= $c['slug'] ?></td>
                <td><a href="remove.php?id=<?= $c['id'] ?>">xoa</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>