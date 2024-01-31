<h2>EDIT GUEST</h2>
@if($guest)
<form action="editGuest&id={{$guest['id']}}" method="post">
    NAME<input type="text" name="name" value="{{$guest['name']}}"><br>
    PASSWORD<input type="text" name="password" value="{{$guest['password']}}"><br>
   Address<input type="text" name="address" value="{{$guest['address']}}"><br>
    Email <input type="email" name="email" id=""value="{{$guest['email']}}"><br>
    <input type="submit" value="edit" name ="edit" ><br>
    <a href="list">List</a>
    @endif
</form>
