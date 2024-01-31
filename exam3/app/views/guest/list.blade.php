<h2>ADD GUEST</h2>
<a href="addGuest">ADD</a>
<table border="1" style="border-collapse: collapse">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Password</th>
        <th>Address</th>
        <th>Email</th>
        <th colspan="2">Action</th>
    </tr>
   @foreach($guest as $p) 
        <tr>
            <td>{{$p['id'] }}</td>
            <td>{{$p['name'] }}</td>
            <td>{{ $p['password'] }}</td>
            <td>{{ $p['address'] }}</td>
            <td>{{ $p['email'] }}</td>
            <td><a href="viewUpdate&id={{ $p['id'] }}" class="btn btn-warning">Edit</td>
            <td><a onclick="return confirm('you want delete sure?')" href="delete&id={{ $p['id'] }}" class="btn btn-danger">Remove</a></td>
        </tr>
   @endforeach
</table>