<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bao gồm Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>LIST CAT</title>
</head>

<body>

  <div class="container mt-5">
    <h2 class="mb-4">LIST CAT</h2>

    <!-- Nút Thêm -->
    <a href="addCat" class="btn btn-primary mb-3">Add</a>

    <!-- Bảng Bootstrap -->
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Category name</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($cat as $c) : ?>
          <tr>
            <td><?= $c['id'] ?></td>
            <td><?= $c['name'] ?></td>
            <td><img src="<?= $c['img'] ?>" alt="" width="60" height="70"></td>
            <td><a href="viewUpdate&id=<?= $c['id'] ?>" class="btn btn-warning"><input type="button" value="Edit"></a></td>
            <td><a onclick="return confirm('you want delete sure?')" href="?url=hard-delete-cat&id=<?= $c['id'] ?>" class="btn btn-danger">Remove cung</a></td>
            <td><a onclick="return confirm('you want delete sure?')" href="?url=soft-delete-catt&id=<?= $c['id'] ?>" class="btn btn-danger">Remove mem</a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    <a href="../" class="btn btn-primary mb-3">Home Admin</a>
    <!-- Kết thúc Bảng Bootstrap -->
  </div>

  <!-- Bao gồm Bootstrap JS và Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>