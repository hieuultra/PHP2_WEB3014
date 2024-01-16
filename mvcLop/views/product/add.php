<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add pro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h2>Add pro</h2>
    <form action="?url=addProduct" method="post">
        name:<input type="text" name="name">
        price:<input type="text" name="price">
        quantity: <input type="text" name="quantity">
        <input type="submit" value="ADD" name="add">
    </form>
</body>

</html>