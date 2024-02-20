<h2>EDIT BOOK</h2>
<form action="{{route('update/'.$gBook['id'])}}" method="post">
    <input type="hidden" name="id" value="{{$gBook['id']}}">
Name: <input type="text" name="name" id="" value="{{$gBook['name']}}">
Author: <input type="text" name="author" id="" value="{{$gBook['author']}}">
Quantity: <input type="text" name="quantity" id="" value="{{$gBook['quantity']}}">
Price : <input type="text" name="price" id="" value="{{$gBook['price']}}">
<input type="submit" value="EDIT" name="update">
</form>
<a href="list"><input type="button" value="LIST"></a>