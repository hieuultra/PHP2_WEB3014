<?php
class BaseModel
{
    function __construct()
    {
        $this->conn = new PDO("mysql:host=127.0.0.1;dbname=poly-mvc;charset=utf8", "root", "");
    }

    static function all()
    {
        $model = new static();
        // câu sql
        $query = "select * from " . $model->table;
        // thực thi câu lệnh sql
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        // lấy toàn bộ dữ liệu trả về từ câu lệnh
        return $stmt->fetchAll();
    }

    static function destroy($id)
    {
        $model = new static;
        $query = "delete from " . $model->table . " where id = $id";
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
    }
    static function find($id)
    {
        $model = new static;
        $query = "select * from " . $model->table . " where id = $id";
        $stmt = $model->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        if (count($data) > 0) {
            return $data[0];
        }
        return [];
    }
    static function where($col, $con, $val)
    {
        $model = new static;
        $model->querybuilder = "select * from " . $model->table . " where $col $con '$val'";
        return $model;
    }
    function get()
    {
        $stmt = $this->conn->prepare($this->querybuilder);
        $stmt->execute();
        // lấy toàn bộ dữ liệu trả về từ câu lệnh
        return $stmt->fetchAll();
    }
}
