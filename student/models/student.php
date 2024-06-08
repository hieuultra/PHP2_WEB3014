<?php
require_once 'database.php';

class Student
{
    public $id; // Thêm thuộc tính id
    public $name;
    public $age;
    public $student_id;
    public $grade;
    public $major;
    private $conn;

    public function __construct($name = null, $age = null, $student_id = null, $grade = null, $major = null, $id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->student_id = $student_id;
        $this->grade = $grade;
        $this->major = $major;

        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save()
    {
        $query = "INSERT INTO students (name, age, student_id, grade, major) VALUES (:name, :age, :student_id, :grade, :major)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':age', $this->age);
        $stmt->bindParam(':student_id', $this->student_id);
        $stmt->bindParam(':grade', $this->grade);
        $stmt->bindParam(':major', $this->major);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function getAll()
    {
        $database = new Database();
        $conn = $database->getConnection();

        $query = "SELECT * FROM students";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $students = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $student = new Student($row['name'], $row['age'], $row['student_id'], $row['grade'], $row['major'], $row['id']);
            $students[] = $student;
        }

        return $students;
    }

    public static function delete($id)
    {
        $database = new Database();
        $conn = $database->getConnection();

        $query = "DELETE FROM students WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
