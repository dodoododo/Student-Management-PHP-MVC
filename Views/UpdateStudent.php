<?php
if (!isset($student) || $student == null) {
    echo "<!DOCTYPE html><html lang='vi'><head><meta charset='UTF-8'>";
    echo "<title>Lỗi</title>";
    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>";
    echo "</head><body class='bg-light'><div class='container my-5'>";
    echo "<div class='alert alert-danger'>Lỗi: Không tìm thấy sinh viên hoặc không có ID được cung cấp.</div>";
    echo "<a href='C_Student.php?mod1=1' class='btn btn-primary'>Quay lại danh sách</a>";
    echo "</div></body></html>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Cập nhật Sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-warning text-dark">
                        <h2 class="mb-0 d-flex align-items-center">
                            <i class="bi bi-pencil-square me-2"></i>
                            Cập nhật thông tin Sinh viên
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="C_Student.php?mod3=1&stid=<?php echo htmlspecialchars($student->getId()); ?>" method="POST">
                            <div class="mb-3">
                                <label for="id" class="form-label">Mã Sinh viên (ID):</label>
                                <input type="text" class="form-control" id="id" name="id" 
                                       value="<?php echo htmlspecialchars($student->getId()); ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên Sinh viên:</label>
                                <input type="text" class="form-control" id="name" name="name" 
                                       value="<?php echo htmlspecialchars($student->getName()); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Tuổi:</label>
                                <input type="number" class="form-control" id="age" name="age" 
                                       value="<?php echo htmlspecialchars($student->getAge()); ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="university" class="form-label">Trường:</label>
                                <input type="text" class="form-control" id="university" name="university" 
                                       value="<?php echo htmlspecialchars($student->getUniversity()); ?>" required>
                            </div>
                            <div class="text-end">
                                <a href="C_Student.php?mod1=1" class="btn btn-secondary">
                                    <i class="bi bi-x-circle me-1"></i>
                                    Hủy
                                </a>
                                <button type="submit" class="btn btn-warning">
                                    <i class="bi bi-check-circle me-1"></i>
                                    Cập nhật
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>