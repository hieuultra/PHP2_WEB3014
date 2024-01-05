<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <p class="text-danger">{{$errMsg}}</p>
    <table class="table table-stripped">
        <thead>
            <th>Id</th>
            <th>name</th>
            <th>Image</th>
            <th>price</th>
            <th>
                <a href="./add-product" class="btn btn-success">Add new</a>
            </th>
        </thead>
        <tbody>
           @foreach($listItem as $pro)
                <tr>
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->name}}</td>
                    <td>
                        <img src="{{$pro->image}}" alt="" class="img-avaatr" width="100">
                    </td>
                    <td>{{$pro->price}}</td>
                    <td>
                        <a href="./edit-product?id={{$pro->id}}" class="btn btn-primary">Edit</a>
                        <a href="./remove-product?id={{$pro->id}}" class="btn btn-danger">Remove</a>
                    </td>
                </tr>
           @endforeach
        </tbody>
    </table>
    
</body>
</html>