<!-- 1.Lập trình hướng đối tượng là gì?
-Lập trình hướng đối tượng (OOP) là một phương pháp lập trình dựa trên khái niệm "đối tượng". Đối tượng có thể chứa dữ liệu dưới dạng thuộc tính (attributes) và mã dưới dạng phương thức (methods). OOP giúp tổ chức mã nguồn dễ quản lý hơn bằng cách nhóm các thuộc tính và phương thức liên quan vào các lớp (classes).

2.Khái niệm class và object, phân biệt class và object.

-Class (lớp): Là một bản thiết kế hoặc khuôn mẫu để tạo ra các đối tượng. Lớp định nghĩa các thuộc tính và phương thức mà các đối tượng của nó sẽ có.
-Object (đối tượng): Là một thực thể cụ thể của một lớp. Mỗi đối tượng là một phiên bản của lớp và có các giá trị thuộc tính riêng.
tính riêng.
-Phân biệt: Lớp giống như một bản thiết kế, còn đối tượng là sản phẩm cụ thể được tạo ra từ bản thiết kế đó.
3.Thuộc tính và phương thức là gì, phân biệt với nhau.
-Thuộc tính: Là các biến được khai báo trong một lớp, dùng để lưu trữ thông tin của đối tượng.
-Phương thức: Là các hàm hoặc chức năng được định nghĩa trong một lớp, dùng để thao tác với các thuộc tính của đối tượng hoặc thực hiện một số hành động.
-Phân biệt: Thuộc tính là dữ liệu của đối tượng, còn phương thức là hành động hoặc chức năng mà đối tượng có thể thực hiện. -->
<?php
class Student
{
    public $name;
    public $age;
    public $student_id;
    public $grade;
    public $major;

    public function __construct($name, $age, $student_id, $grade, $major)
    {
        $this->name = $name;
        $this->age = $age;
        $this->student_id = $student_id;
        $this->grade = $grade;
        $this->major = $major;
    }

    public function displayInfo()
    {
        return "Name: {$this->name},
        Age: {$this->age}, 
        ID: {$this->student_id}, 
        Grade: {$this->grade}, 
        Major: {$this->major}";
    }
}

$students = [
    new Student("Nguyen Van A", 20, "SV001", "A", "Web"),
    new Student("Le Thi B", 21, "SV002", "B", "Web1"),
    new Student("Tran Van C", 22, "SV003", "A", "Web2"),
    new Student("Pham Thi D", 23, "SV004", "C", "Web3"),
    new Student("Hoang Van E", 24, "SV005", "B", "Web4")
];

echo "<table border='1px solid'>";
echo "<tr>
        <th>Name</th>
        <th>Age</th>
        <th>ID</th>
        <th>Grade</th>
        <th>Major</th>
    </tr>";
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>{$student->name}</td>";
    echo "<td>{$student->age}</td>";
    echo "<td>{$student->student_id}</td>";
    echo "<td>{$student->grade}</td>";
    echo "<td>{$student->major}</td>";
    echo "</tr>";
}
echo "</table>";
?>