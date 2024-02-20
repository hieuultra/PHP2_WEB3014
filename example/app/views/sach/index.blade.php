<h2>LIST BOOK</h2>
<a href="viewAdd"><input type="button" value="ADD"></a>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Tên sách</th>
        <th>Tác giả</th>
        <th>Số lượng</th>
        <th>Giá</th>
    </thead>
    <tbody>

         @foreach($lstSach as $sach)
            <tr>
                <td>{{ $sach['id'] }}</td>
                <td>{{ $sach['name'] }}</td>
                <td>{{ $sach['author'] }}</td>
                <td>{{ $sach['quantity'] }}</td>
                <td>{{ $sach['price'] }}</td>
                <th>
                    <a href="getById/{{$sach['id']}}">Sửa</a>
                    <a href="delete/{{$sach['id']}}" onclick="return confirm('ban co chac chan muon xoa?')" >Xóa</a>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>