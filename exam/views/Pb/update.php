<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>EDIT PHONG BAN</h2>
    <?php if ($phongban) { ?>
        <form action="?url=update-pb&id=<?= $phongban['id'] ?>" method="post">
            NAME: <input type="text" name="name" id="" value="<?= $phongban['name'] ?>">
            ADDRESS: <input type="text" name="address" id="" value="<?= $phongban['address'] ?>">
            EMAIL: <input type="text" name="email" id="" value="<?= $phongban['email'] ?>">
            <input type="submit" value="edit" name="edit">
        <?php } ?>
        </form>
        <a href="?url=/"></a>
</body>

</html>