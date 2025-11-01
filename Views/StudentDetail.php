<?php
if (!isset($searchResult)) {
    $searchResult = [];
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả Tìm kiếm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-header bg-info text-white">
                        <h2 class="mb-0 d-flex align-items-center">
                            <i class="bi bi-search me-2"></i>
                            Tìm kiếm Sinh viên
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="C_Student.php?mod5=1" method="POST">
                            <div class="mb-3">
                                <label for="keyword" class="form-label">Nhập Mã số, Tên, hoặc Trường:</label>
                                <input type="text" class="form-control" id="keyword" name="keyword" 
                                       value="<?php echo isset($_POST['keyword']) ? htmlspecialchars($_POST['keyword']) : ''; ?>" required>
                            </div>
                            <div class="text-end">
                                <a href="../index.php" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left me-1"></i> Về trang chủ
                                </a>
                                <button type="submit" class="btn btn-info text-white">
                                    <i class="bi bi-search me-1"></i>
                                    Tìm kiếm lại
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-light">
                        <h4 class="mb-0">Kết quả tìm kiếm</h4>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($searchResult)): ?>
                            <p class="text-success">Tìm thấy <?php echo count($searchResult); ?> kết quả:</p>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered align-middle">
                                    <thead class="table-dark text-uppercase">
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Tên</th>
                                            <th scope="col">Tuổi</th>
                                            <th scope="col">Trường</th>
                                            <th scope="col" class="text-center">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($searchResult as $student): ?>
                                            <tr>
                                                <th scope="row"><?php echo htmlspecialchars($student->getId()); ?></th>
                                                <td><?php echo htmlspecialchars($student->getName()); ?></td>
                                                <td><?php echo htmlspecialchars($student->getAge()); ?></td>
                                                <td><?php echo htmlspecialchars($student->getUniversity()); ?></td>
                                                <td class="text-center">
                                                    <a href="C_Student.php?mod3=1&stid=<?php echo htmlspecialchars($student->getId()); ?>" 
                                                       class="btn btn-warning btn-sm" title="Sửa">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a href="C_Student.php?mod4=1&stid=<?php echo htmlspecialchars($student->getId()); ?>" 
                                                       class="btn btn-danger btn-sm" title="Xóa"
                                                       onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này?');">
                                                        <i class="bi bi-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-warning" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                Không tìm thấy sinh viên nào khớp với từ khóa của bạn.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
