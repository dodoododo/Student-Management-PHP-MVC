<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh viên mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-success text-white">
                        <h2 class="mb-0 d-flex align-items-center">
                            <i class="bi bi-person-plus-fill me-2"></i>
                            Thêm Sinh viên mới
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="C_Student.php?mod2=1" method="POST">
                            <div class="mb-3">
                                <label for="student_id" class="form-label">Mã Sinh viên (ID):</label>
                                <input type="text" class="form-control" id="student_id" name="id" required>
                                <div id="id_error_message" class="invalid-feedback d-block"></div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên Sinh viên:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Tuổi:</label>
                                <input type="number" class="form-control" id="age" name="age" required>
                            </div>
                            <div class="mb-3">
                                <label for="university" class="form-label">Trường:</label>
                                <input type="text" class="form-control" id="university" name="university" required>
                            </div>
                            <div class="text-end">
                                <a href="../index.php" class="btn btn-secondary">
                                    <i class="bi bi-x-circle me-1"></i>
                                    Hủy
                                </a>
                                <button type="submit" class="btn btn-success" id="submit_button">
                                    <i class="bi bi-check-circle me-1"></i>
                                    Thêm Sinh viên
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const idInput = document.getElementById('student_id');
            const errorMessage = document.getElementById('id_error_message');
            const submitButton = document.getElementById('submit_button');
            idInput.addEventListener('blur', function() {
                const id = idInput.value;
                if (id.trim() === '') {
                    errorMessage.textContent = '';
                    idInput.classList.remove('is-invalid', 'is-valid');
                    submitButton.disabled = false;
                    return;
                }
                fetch(`C_Student.php?mod=check_id&id=${encodeURIComponent(id)}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.exists) {
                            idInput.classList.add('is-invalid');
                            idInput.classList.remove('is-valid');
                            errorMessage.textContent = 'Mã ID này đã tồn tại. Vui lòng chọn ID khác.';
                            submitButton.disabled = true;
                        } else {
                            idInput.classList.add('is-valid');
                            idInput.classList.remove('is-invalid');
                            errorMessage.textContent = '';
                            submitButton.disabled = false;
                        }
                    })
                    .catch(error => {
                        console.error('Lỗi khi kiểm tra ID:', error);
                        errorMessage.textContent = 'Không thể kiểm tra ID. Vui lòng thử lại.';
                        submitButton.disabled = true;
                    });
            });
            idInput.addEventListener('input', function() {
                idInput.classList.remove('is-invalid', 'is-valid');
                errorMessage.textContent = '';
                submitButton.disabled = false;
            });
        });
    </script>
</body>
</html>