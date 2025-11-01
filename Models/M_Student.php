<?php
    include_once("E_Student.php");
    class Model_Student {
        public function __construct() { }
        public function getAllStudents() {
            $link = mysqli_connect("localhost","root","123456") or die ("Khong the ket noi den CSDL MYSQL");
            mysqli_select_db($link, "dulieu2");
            $sql = "select * from sinhvien";
            $rs = mysqli_query($link, $sql);
            $i=0;
            while($row = mysqli_fetch_array($rs)) {
                $id = $row['id']; $name = $row['name']; $age = $row['age']; $university=$row['university'];
                $students[$i] = new Entity_Student($id, $name, $age, $university);
                $i++;
            }
            return $students;
        }
        public function getStudentDetail($stid) {
            $allStudent = $this->getAllStudents(); 
            foreach ($allStudent as $student) {
                if ($student->getId() == $stid) {
                    return $student; 
                }
            }
            return null; 
        }
        public function getStudentById($stid) {
            $link = mysqli_connect("localhost", "root", "123456") or die("Khong the ket noi den CSDL MYSQL");
            mysqli_select_db($link, "dulieu2");
            $stmt = mysqli_prepare($link, "SELECT * FROM sinhvien WHERE id = ?");
            mysqli_stmt_bind_param($stmt, "s", $stid);
            mysqli_stmt_execute($stmt);
            $rs = mysqli_stmt_get_result($stmt);
            $student = null; 
            if ($row = mysqli_fetch_array($rs)) {
                $id = $row['id']; 
                $name = $row['name']; 
                $age = $row['age']; 
                $university = $row['university'];
                $student = new Entity_Student($id, $name, $age, $university);
            }
            mysqli_close($link);
            return $student;
        }
        public function addStudent($id, $name, $age, $university) {
            $link = mysqli_connect("localhost","root","123456") or die ("Khong the ket noi den CSDL MYSQL");
            mysqli_select_db($link, "dulieu2");
            $stmt = mysqli_prepare($link, "INSERT INTO sinhvien (id, name, age, university) VALUES (?, ?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "ssis", $id, $name, $age, $university);
            $result = mysqli_stmt_execute($stmt);
            mysqli_close($link);
            return $result;
        }
        public function checkIdExists($id) {
            $link = mysqli_connect("localhost","root","123456") or die ("Khong the ket noi den CSDL MYSQL");
            mysqli_select_db($link, "dulieu2");
            $stmt = mysqli_prepare($link, "SELECT id FROM sinhvien WHERE id = ?");
            mysqli_stmt_bind_param($stmt, "s", $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); 
            $count = mysqli_stmt_num_rows($stmt); 
            mysqli_close($link);
            return ($count > 0); 
        }
        public function updateStudent($id, $name, $age, $university) {
            $link = mysqli_connect("localhost","root","123456") or die ("Khong the ket noi den CSDL MYSQL");
            mysqli_select_db($link, "dulieu2");
            $stmt = mysqli_prepare($link, "UPDATE sinhvien SET name = ?, age = ?, university = ? WHERE id = ?");
            mysqli_stmt_bind_param($stmt, "siss", $name, $age, $university, $id);
            $result = mysqli_stmt_execute($stmt);
            mysqli_close($link);
            return $result;
        }
        public function deleteStudent($id) {
            $link = mysqli_connect("localhost","root","123456") or die ("Khong the ket noi den CSDL MYSQL");
            mysqli_select_db($link, "dulieu2");
            $stmt = mysqli_prepare($link, "DELETE FROM sinhvien WHERE id = ?");
            mysqli_stmt_bind_param($stmt, "s", $id);
            $result = mysqli_stmt_execute($stmt);
            mysqli_close($link);
            return $result;
        }
        public function searchStudent($keyword) {
            $link = mysqli_connect("localhost","root","123456") or die ("Khong the ket noi den CSDL MYSQL");
            mysqli_select_db($link, "dulieu2");
            $searchTerm = "%" . $keyword . "%";
            $stmt = mysqli_prepare($link, "SELECT * FROM sinhvien WHERE name LIKE ? OR university LIKE ? OR id = ?");
            mysqli_stmt_bind_param($stmt, "sss", $searchTerm, $searchTerm, $keyword);
            mysqli_stmt_execute($stmt);
            $rs = mysqli_stmt_get_result($stmt);
            $students = []; 
            $i = 0;
            while($row = mysqli_fetch_array($rs)) {
                $id = $row['id']; $name = $row['name']; $age = $row['age']; $university=$row['university'];
                $students[$i] = new Entity_Student($id, $name, $age, $university);
                $i++;
            }
            mysqli_close($link);
            return $students;
        }
    }
?>