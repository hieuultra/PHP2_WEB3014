    @if($pr) 
    <form action="editPro&id={{ $pr['id']  }}" method="post">
        NAME<input type="text" name="name" value="{{ $pr['name'] }}">
        PRICE<input type="text" name="price" value="{{ $pr['price'] }}">
        QUANTITY<input type="text" name="quantity" value="{{ $pr['quantity'] }}">
        <input type="submit" value="edit" name="edit">
    @endif
    <div><a href="list">list</a></div>
    </form>