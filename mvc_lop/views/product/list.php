<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tbale san pham</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h2>DANH SACH SAN PHAM</h2>
    <a href="?url=add-product">ADD</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>IMAGE</th>
                <th>CATEGORY</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($product as $p) : ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['name'] ?></td>
                    <td><?= $p['price'] ?></td>
                    <td><?= $p['category_name'] ?></td>
                    <td><a href=""><input type="button" value="Edit"></a></td>
                    <td><a href="">xoa cung</a></td>
                    <td><a href="">xoa mem</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>