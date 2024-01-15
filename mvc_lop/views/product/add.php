<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pro</title>
</head>

<body>
    <h2>ADD product</h2>
    <form action="?url=add-product" method="post" enctype="multipart/form-data">
        Name:<input type="text" name="name" id="">
        Price: <input type="number" name="price" id="">
        Image:<input type="file" name="image" id="">
        Category:
        <select name="id_category" id="">
            <option value=""></option>
        </select>
        <button type="submit" name="save">Save</button>
    </form>
</body>

</html>