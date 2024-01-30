<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form edit cat</title>
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Edit Cat</h2>
        <?php if ($cat) { ?>
            <form action="editCat&id=<?= $cat['id'] ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="tenSanPham" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $cat['name'] ?>">
                </div>

                <div class="mb-3">
                    <label for="hinhAnh" class="form-label">Image</label>
                    <input type="file" class="form-control" name="img" id="img">
                    <img src="<?= $cat['img'] ?>" alt="">
                </div>


                <button type="submit" class="btn btn-primary" name="edit">edit</button>
                <a href="listCat" class="btn btn-primary ">List</a>
            <?php } ?>
            </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>