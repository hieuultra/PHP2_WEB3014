<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Price</td>
    </tr>
    <?php foreach ($product as $value) { ?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['price']; ?></td>
                <td>
                    <a href="updateProduct&id=<?php echo $value['id'] ?>">Edit</a>
                </td>
                <td>
                    <a href="delete&id=<?php echo $value['id'] ?>">del</a>
                </td>
            </tr>
        <?php } ?>


</table>