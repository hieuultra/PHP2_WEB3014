<?php
class Category
{
    var $table = "categories";

    function __construct()
    {
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=poly-mvc;charset=utf8", "root", "");
    }

    static function all()
    {
        $model = new Category();
        // câu sql
        $query = "select * from " . $model->table;
        // thực thi câu lệnh sql
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        // lấy toàn bộ dữ liệu trả về từ câu lệnh
        return $stmt->fetchAll();
    }

    function destroy($id)
    {
        $query = "delete from " . $this->table . " where id = $id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
}
