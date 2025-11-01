<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn Sinh viên để Cập nhật</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-warning text-dark">
                <h2 class="mb-0 d-flex align-items-center">
                    <i class="bi bi-pencil-square me-2"></i>
                    Chọn Sinh viên để Cập nhật
                </h2>
            </div>
            <div class="card-body">
                <p class="text-muted">Nhấn nút "Sửa" ở hàng tương ứng để cập nhật thông tin sinh viên.</p>
                <?php if (!empty($studentList)): ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered align-middle">
                            <thead class="table-dark text-uppercase">
                                <tr>
                                    <th scope="col" style="width: 10%;">ID</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col" style="width: 10%;">Tuổi</th>
                                    <th scope="col">Trường</th>
                                    <th scope="col" style="width: 15%;" class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($studentList as $student): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($student->getId()); ?></td>
                                        <td><?php echo htmlspecialchars($student->getName()); ?></td>
                                        <td><?php echo htmlspecialchars($student->getAge()); ?></td>
                                        <td><?php echo htmlspecialchars($student->getUniversity()); ?></td>
                                        <td class="text-center">
                                            <a href="C_Student.php?mod3=1&stid=<?php echo htmlspecialchars($student->getId()); ?>" 
                                               class="btn btn-warning btn-sm w-100">
                                                <i class="bi bi-pencil-square me-1"></i>
                                                Sửa
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="alert alert-info" role="alert">
                        Không có sinh viên nào trong danh sách.
                    </div>
                <?php endif; ?>
            </div>
            <div class="card-footer text-center">
                <a href="../index.php" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-1"></i> Quay lại trang chính
                </a>
            </div>
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>