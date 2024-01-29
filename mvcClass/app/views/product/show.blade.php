<a href="addProduct">ADD</a>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Quantity</td>
    </tr>
   @foreach($pro as $p) 
        <tr>
            <td>{{$p['id'] }}</td>
            <td>{{$p['name'] }}</td>
            <td>{{ $p['price'] }}</td>
            <td>{{ $p['quantity'] }}</td>
            <td><a href="viewUpdate&id={{ $p['id'] }}" class="btn btn-warning">Edit</td>
            <td><a onclick="return confirm('you want delete sure?')" href="delete&id={{ $p['id'] }}" class="btn btn-danger">Remove</a></td>
        </tr>
   @endforeach
</table>