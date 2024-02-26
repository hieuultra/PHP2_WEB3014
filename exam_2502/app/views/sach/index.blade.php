<h2>LIST BOOK</h2>
<a href="viewAdd"><input type="button" value="ADD"></a>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Title</th>
        <th>Create_at</th>
    </thead>
    <tbody>

         @foreach($lstSach as $sach)
            <tr>
                <td>{{ $sach['id'] }}</td>
                <td>{{ $sach['name'] }}</td>
                <td>{{ $sach['title'] }}</td>
                <td>{{ $sach['create_at'] }}</td>
                <th>
                    <a href="getById/{{$sach['id']}}">Sửa</a>
                    <a href="delete/{{$sach['id']}}" onclick="return confirm('ban co chac chan muon xoa ko?')" >Xóa</a>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>