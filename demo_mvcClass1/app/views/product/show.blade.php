<a href="add-product">add</a>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Price</td>
    </tr>
    
    @foreach ($pro as $value)
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['name']}}</td>
                <td>{{$value['price']}}</td>

                <td> <a href="updateProduct/{{$value['id']}}">Sửa</a></td>
            </tr>
    @endforeach

</table>
