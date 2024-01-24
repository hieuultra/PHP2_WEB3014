<?php if ($pro) { ?>
    <form action="editPro?id=<?= $pro['id']  ?>" method="post">
        NAME<input type="text" name="name" value="<?= $pro['name'] ?>">
        PRICE<input type="text" name="price" value="<?= $pro['price'] ?>">
        QUANTITY<input type="text" name="quantity" value="<?= $pro['quantity'] ?>">
        <input type="submit" value="edit" name="edit">
    <?php } ?>
    <div><a href="list">list</a></div>
    </form>