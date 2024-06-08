<?php
require_once 'models/student.php';

class StudentController
{
    public function index()
    {
        $students = Student::getAll();
        require_once 'views/student/index.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student = new Student($_POST['name'], $_POST['age'], $_POST['student_id'], $_POST['grade'], $_POST['major']);
            $student->save();
            header('Location: index.php');
        } else {
            require_once 'views/student/add.php';
        }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            Student::delete($_GET['id']);
        }
        header('Location: index.php');
    }
}
?>
