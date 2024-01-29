<?php 
    namespace App\models;
    use App\models\DB;
    //require_once 'db.php';
    class Product extends DB{
        function getAllProduct(){
            $sql = "select * from product";
            return $this->getData($sql);
        }
    
        function add($name, $price){
            $sql = "insert into product(name, price) values ('$name', '$price')";
            return $this->getData($sql, false);
        }

        function getProById($id){
                $sql = "select * from product where id = $id";
                return $this->getData($sql, false);
            }

         function updatePro($id, $name, $price){
            $sql = "update product set name = '$name', price = '$price' where id = '$id'";
            return $this->getData($sql, false);
        }

           function del($id){
            $sql = "delete from product where id = '$id'";
            return $this->getData($sql, false);
        }
}

?>