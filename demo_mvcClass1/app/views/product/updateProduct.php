<form action="update" method="post">
    <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
    <input type="text" name="name" value ="<?php echo $product['name']?>">
    <input type="text" name="price" value ="<?php echo $product['price']?>">
    <input type="submit" value ="Sua" name ="edit">

</form>