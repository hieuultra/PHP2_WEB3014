<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form edit pro</title>
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Edit pro</h2>
        <?php if ($pro) { ?>
            <form action="editPro&id=<?= $pro['id'] ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="tenSanPham" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $pro['name'] ?>">
                    <!-- <?php
                            echo (!empty($error_messages['name']['required'])) ? '<span style="color: red;">' . $error_messages['name']['required'] . '</span>' : false;
                            echo (!empty($error_messages['name']['length'])) ? '<span style="color: red;">' . $error_messages['name']['length'] . '</span>' : false;
                            ?> -->
                </div>

                <div class="mb-3">
                    <label for="hinhAnh" class="form-label">Image</label>
                    <input type="file" class="form-control" name="img" id="img">
                    <img src="<?= $pro['img'] ?>" alt="">
                </div>
                <div class="mb-3">
                    <label for="des" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="162" rows="3"><?= $pro['description'] ?></textarea>
                    <!-- <?php
                            echo (!empty($error_messages['name']['required'])) ? '<span style="color: red;">' . $error_messages['name']['required'] . '</span>' : false;
                            echo (!empty($error_messages['name']['length'])) ? '<span style="color: red;">' . $error_messages['name']['length'] . '</span>' : false;
                            ?> -->
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?= $pro['price'] ?>">
                    <!-- <?php
                            echo (!empty($error_messages['name']['required'])) ? '<span style="color: red;">' . $error_messages['name']['required'] . '</span>' : false;
                            echo (!empty($error_messages['name']['length'])) ? '<span style="color: red;">' . $error_messages['name']['length'] . '</span>' : false;
                            ?> -->
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Discount</label>
                    <input type="number" class="form-control" id="discount" name="discount" value="<?= $pro['discount'] ?>">
                    <!-- <?php
                            echo (!empty($error_messages['name']['required'])) ? '<span style="color: red;">' . $error_messages['name']['required'] . '</span>' : false;
                            echo (!empty($error_messages['name']['length'])) ? '<span style="color: red;">' . $error_messages['name']['length'] . '</span>' : false;
                            ?> -->
                </div>

                <div class="mb-3">
                    <label for="danhMuc" class="form-label">Category</label>
                    <select class="form-select" id="id_cat" name="id_cat">
                        <?php foreach ($listCat as $l) : ?>
                            <option <?php if ($l['name'] == $pro['category_name']) echo 'selected' ?> value="<?= $l['id'] ?>">
                                <?= $l['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="edit">EDIT</button>
                <a href="listPro" class="btn btn-primary ">List</a>
            </form>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>