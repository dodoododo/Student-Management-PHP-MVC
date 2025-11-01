<?php
include "../Models/M_Student.php";
class Ctrl_Student {
    public function invoke() {
        $modelStudent = new Model_Student();
        if (isset($_GET['mod']) && $_GET['mod'] == 'check_id') {
            $response = ['exists' => false];
            if (isset($_GET['id']) && !empty($_GET['id'])) {
                $id = $_GET['id'];
                if ($modelStudent->checkIdExists($id)) {
                    $response['exists'] = true;
                }
            }
            header('Content-Type: application/json');
            echo json_encode($response);
            exit; 
        }
        if (isset($_GET['mod1'])) {
            $studentList = $modelStudent->getAllStudents();
            include "../Views/StudentList.php";
        }
        elseif (isset($_GET['mod2'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $age = $_POST['age'];
                $university = $_POST['university'];
                $modelStudent->addStudent($id, $name, $age, $university);
                header("Location: C_Student.php?mod1=1");
            } else {
                include "../Views/AddStudent.php";
            }
        }
        elseif (isset($_GET['mod3'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
                $id = $_POST['id'];
                $name = $_POST['name'];
                $age = $_POST['age'];
                $university = $_POST['university'];
                $modelStudent->updateStudent($id, $name, $age, $university); 
                header("Location: C_Student.php?mod3=1");
            } 
            else {
                if (isset($_GET['stid'])) {
                    $student = $modelStudent->getStudentById($_GET['stid']); 
                    include "../Views/UpdateStudent.php"; 
                } 
                else {
                    $studentList = $modelStudent->getAllStudents();
                    include "../Views/UpdateStudentList.php"; 
                }
            }
        }
        elseif (isset($_GET['mod4'])) {
            if (isset($_GET['stid'])) {
                $modelStudent->deleteStudent($_GET['stid']);
                header("Location: C_Student.php?mod4=1");
            } 
            else {
                $studentList = $modelStudent->getAllStudents();
                include "../Views/DeleteStudent.php"; 
            }
        }
        elseif (isset($_GET['mod5'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $keyword = $_POST['keyword'];
                $searchResult = $modelStudent->searchStudent($keyword);
                include "../Views/StudentDetail.php";
            } else {
                include "../Views/StudentDetail.php";
            }
        }
    }
}
$C_Student = new Ctrl_Student();
$C_Student->invoke();
?>
