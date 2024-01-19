<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List pb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h2>LIST PHONG BAN</h2>
    <table class="table">
    <a href="?url=add-pb" class="btn btn-primary mb-3">Add</a>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ADDRESS</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pban as $p) : ?>
                <tr>
                    <td><?= $p['id'] ?></td>
                    <td><?= $p['name'] ?></td>
                    <td><?= $p['address'] ?></td>
                    <td><?= $p['email'] ?></td>
                    <td><a href="?url=update-pb&id=<?= $p['id'] ?>" class="btn btn-warning">Edit</td>
                    <td><a onclick="return confirm('you want delete sure?')" href="?url=delete-pb&id=<?= $p['id'] ?>" class="btn btn-danger">Remove</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>