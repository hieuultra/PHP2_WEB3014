<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT CAT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h2>EDIT CAT</h2>
    <?php if ($cate) { ?>
        <form action="?url=edit-cat&id=<?= $cate['id'] ?>" method="post">
            NAME: <input type="text" name="name" id="" value="<?= $cate['name'] ?>">
            <input type="submit" class="btn btn-primary" value="UPDATE" name="edit">
        </form>
    <?php } ?>
</body>

</html>