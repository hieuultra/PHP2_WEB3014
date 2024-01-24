<a href="addProduct">ADD</a>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Quantity</td>
    </tr>
    <?php foreach ($product as $p) { ?>
        <tr>
            <td><?php echo $p['id'] ?></td>
            <td><?php echo $p['name'] ?></td>
            <td><?php echo $p['price'] ?></td>
            <td><?php echo $p['quantity'] ?></td>
            <td><a href="viewUpdate&id=<?= $p['id'] ?>" class="btn btn-warning">Edit</td>
            <td><a onclick="return confirm('you want delete sure?')" href="delete&id=<?= $p['id'] ?>" class="btn btn-danger">Remove</a></td>
        </tr>
    <?php } ?>
</table>