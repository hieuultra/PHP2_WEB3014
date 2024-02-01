<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bao gồm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form add pro</title>
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Add pro</h2>
        <?php
        //kiem tra xem session loi co ton tai ko
        if (isset($_SESSION['error_messages'])) {
            $error_messages = $_SESSION['error_messages'];
            // // Hiển thị thông báo lỗi cho người dùng
            // foreach ($error_messages as $field => $messages) {
            //     foreach ($messages as $message) {
            //         echo '<div class="alert alert-danger" role="alert">' . $message . '</div>';
            //     }
            // }
            // // Xóa thông báo lỗi từ session sau khi hiển thị
            // unset($_SESSION['error_messages']);
        }
        ?>
        <form action="addProduct" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="tenSanPham" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên" required>
                <!-- <?php
                        echo (!empty($error_messages['name']['required'])) ? '<span style="color: red;">' . $error_messages['name']['required'] . '</span>' : false;
                        echo (!empty($error_messages['name']['length'])) ? '<span style="color: red;">' . $error_messages['name']['length'] . '</span>' : false;
                        ?> -->
            </div>

            <div class="mb-3">
                <label for="hinhAnh" class="form-label">Image</label>
                <input type="file" class="form-control" name="img" id="img" required>
            </div>
            <div class="mb-3">
                <label for="des" class="form-label">Description</label>
                <textarea name="description" id="description" cols="162" rows="3" required></textarea>
                <!-- <?php
                        echo (!empty($error_messages['name']['required'])) ? '<span style="color: red;">' . $error_messages['name']['required'] . '</span>' : false;
                        echo (!empty($error_messages['name']['length'])) ? '<span style="color: red;">' . $error_messages['name']['length'] . '</span>' : false;
                        ?> -->
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Nhập price" required>
                <!-- <?php
                        echo (!empty($error_messages['name']['required'])) ? '<span style="color: red;">' . $error_messages['name']['required'] . '</span>' : false;
                        echo (!empty($error_messages['name']['length'])) ? '<span style="color: red;">' . $error_messages['name']['length'] . '</span>' : false;
                        ?> -->
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Discount</label>
                <input type="text" class="form-control" id="discount" name="discount" placeholder="Nhập discount" required>
                <!-- <?php
                        echo (!empty($error_messages['name']['required'])) ? '<span style="color: red;">' . $error_messages['name']['required'] . '</span>' : false;
                        echo (!empty($error_messages['name']['length'])) ? '<span style="color: red;">' . $error_messages['name']['length'] . '</span>' : false;
                        ?> -->
            </div>

            <div class="mb-3">
                <label for="danhMuc" class="form-label">Category</label>
                <select class="form-select" id="id_cat" name="id_cat">
                    <?php foreach ($listCat as $l) : ?>
                        <option value="<?= $l['id'] ?>"><?= $l['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" name="addProduct" value="Save">
            <a href="listPro" class="btn btn-primary ">List</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>