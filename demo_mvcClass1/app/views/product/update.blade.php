<form action="http://localhost/PHP2/WD18309/demo_mvcClass1/update/{{$product['id'] }}" method="post">
    <input type="hidden" name="id" value="{{$product['id']}}">
    <input type="text" name="name" value ="{{$product['name']}}">
    <input type="text" name="price" value ="{{$product['price']}}">
    <input type="submit" value ="Sua" name ="edit">
    <!-- {{ route('update/'.$product['id']) }} -->
</form>
