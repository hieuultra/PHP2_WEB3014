
<a href="index.php?url=addProduct">ADD</a>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Quantity</td>
    </tr>
    <?php foreach($product as $key=>$value){?>
        <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['price'] ?></td>
            <td><?php echo $value['quantity'] ?></td>
        </tr>
        <?php }?>
</table>