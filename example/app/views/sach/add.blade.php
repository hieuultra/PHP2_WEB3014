@if(isset($_SESSION['errors']) && isset($_GET['msg']))
<ul>
    @foreach($_SESSION['errors'] as $e)
            <li style="color: red" >{{$e}}</li>
    @endforeach
</ul>
@endif
<h2>Add BOOK</h2>
<form action="add" method="post">
Name: <input type="text" name="name" id="">
Author: <input type="text" name="author" id="">
Quantity: <input type="text" name="quantity" id="">
Price : <input type="text" name="price" id="">
email: <input type="text" name="email" id="email">
<input type="submit" value="ADD" name="add">
</form>
<a href="list"><input type="button" value="LIST"></a>