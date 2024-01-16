<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Cat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>ADD CATEGORY</h2>
        <a href="?url=add-cat" class="btn btn-primary">ADD</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>ACTION</th>
                </tr>
            <tbody>
                <?php foreach ($listCat as $l) : ?>
                    <tr>
                        <td><?= $l['id'] ?></td>
                        <td><?= $l['name'] ?></td>
                        <td><a href="?url=update-category&id=<?= $l['id'] ?>" class="btn btn-warning">EDIT</a></td>
                        <td><a onclick="return confirm('you want delete sure?')" href="?url=hard-delete-category&id=<?= $l['id'] ?>" class="btn btn-danger">Remove cung</a></td>
                        <td><a onclick="return confirm('you want delete sure?')" href="?url=soft-delete-category&id=<?= $l['id'] ?>" class="btn btn-danger">Remove mem</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </thead>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</html>