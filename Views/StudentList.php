<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h2 class="mb-0 d-flex align-items-center">
                    <i class="bi bi-list-ul me-2"></i>
                    Danh sách Sinh viên
                </h2>
            </div>
            <div class="card-body">
                <?php if (!empty($studentList)): ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered align-middle">
                            <thead class="table-dark text-uppercase">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Tuổi</th>
                                    <th scope="col">Trường</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($studentList as $student): ?>
                                    <tr>
                                        <th scope="row"><?php echo htmlspecialchars($student->getId()); ?></th>
                                        <td><?php echo htmlspecialchars($student->getName()); ?></td>
                                        <td><?php echo htmlspecialchars($student->getAge()); ?></td>
                                        <td><?php echo htmlspecialchars($student->getUniversity()); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <div class="alert alert-info" role="alert">
                        <i class="bi bi-info-circle-fill me-2"></i>
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