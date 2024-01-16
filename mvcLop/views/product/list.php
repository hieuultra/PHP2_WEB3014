<a href="index.php?url=addProduct">ADD</a>
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
        </tr>
    <?php } ?>
</table>