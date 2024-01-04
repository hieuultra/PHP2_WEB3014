<?php
function get_user($email)
{
    include 'config.php';
    $sql = "select * from users where email= ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->excute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_array(PDO);
        return $row;
    }
    $connection->close();
}
