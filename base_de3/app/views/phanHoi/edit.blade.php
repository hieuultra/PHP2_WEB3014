<h2>EDIT</h2>
<form action="{{route('update/'.$phanhoi['id'])}}" method="post">
    NGUOI GUI: <input type="text" name="nguoigui" value="{{$phanhoi['nguoiGui']}}"/><br>
    EMAIL: <input type="text" name="email" id="" value="{{$phanhoi['email']}}"> <br>
    NOIDUNG: <input type="text" name="noidung" value="{{$phanhoi['noiDung']}}"/><br>
    Trang thai: <input type="text" name="trangthai" id="" value="{{$phanhoi['trangThai']}}"><br>
    <input type="submit" value="EDIT" name="EDIT">
</form>
<a href="list"></a>