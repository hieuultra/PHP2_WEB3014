<table border="1">
    <thead>
        <th>ID phản hồi</th>
        <th>Người gửi</th>
        <th>email</th>
        <th>Nội dung</th>
        <th>Trạng thái</th>
    </thead>
    <tbody>

         @foreach($lstPhanHoi as $phanHoi)
            <tr>
                <td>{{ $phanHoi['idPhanHoi'] }}</td>
                <td>{{ $phanHoi['nguoiGui'] }}</td>
                <td>{{ $phanHoi['email'] }}</td>
                <td>{{ $phanHoi['noiDung'] }}</td>
                <td>{{ $phanHoi['trangThai'] }}</td>
                <th>
                    <a href="getById/{{$phanhoi['id']}}">Sửa</a>
                    <a href="delete/{{$phanhoi['id']}}" onclick="return confirm('ban co chac chan muon xoa ko?')">Xóa</a>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>