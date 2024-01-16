<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h2>List product</h2>
<a href="?url=addProduct">ADD</a>
<table class="table">
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
</body>
</html>
