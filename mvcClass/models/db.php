<?php
require_once 'env.php';
class DB
{
    // hàm kết nối csdl
    function getConnect()
    {
        $connect = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME .
            ";charset=" . DBCHARSET, DBUSER, DBPASS);
        return $connect;
    }
    // lấy dữ liệu
    // nếu getAll = true=> trả ra tất cả dữ liệu
    // nếu getAll = false => sử dụng để thêm, sửa, xóa
    function getData($query, $getAll = true)
    {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }
}
