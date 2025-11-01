<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .card-link {
            text-decoration: none;
            color: inherit; 
        }
        .card:hover {
            transform: translateY(-5px); 
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; 
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <i class="bi bi-mortarboard-fill"></i>
                HỆ THỐNG QUẢN LÝ SINH VIÊN
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <h1 class="text-center mb-4 display-6">Bảng điều khiển</h1>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4">
                <a href="Controllers/C_Student.php?mod1='1'" class="card-link">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <i class="bi bi-list-ul fs-1 text-primary mb-3"></i>
                            <h5 class="card-title">Xem Sinh viên</h5>
                            <p class="card-text text-muted">Xem danh sách tất cả sinh viên trong hệ thống.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="Controllers/C_Student.php?mod2='1'" class="card-link">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <i class="bi bi-person-plus-fill fs-1 text-success mb-3"></i>
                            <h5 class="card-title">Thêm Sinh viên</h5>
                            <p class="card-text text-muted">Thêm một sinh viên mới vào cơ sở dữ liệu.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="Controllers/C_Student.php?mod3='1'" class="card-link">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <i class="bi bi-pencil-square fs-1 text-warning mb-3"></i>
                            <h5 class="card-title">Cập nhật Sinh viên</h5>
                            <p class="card-text text-muted">Chỉnh sửa thông tin của sinh viên đã có.</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="Controllers/C_Student.php?mod4='1'" class="card-link">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <i class="bi bi-person-x-fill fs-1 text-danger mb-3"></i>
                            <h5 class="card-title">Xóa Sinh viên</h5>
                            <p class="card-text text-muted">Xóa một sinh viên khỏi hệ thống (cẩn thận!).</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a href="Controllers/C_Student.php?mod5='1'" class="card-link">
                    <div class="card h-100 shadow-sm text-center">
                        <div class="card-body">
                            <i class="bi bi-search fs-1 text-info mb-3"></i>
                            <h5 class="card-title">Tìm kiếm Sinh viên</h5>
                            <p class="card-text text-muted">Tìm kiếm sinh viên theo tên, mã số hoặc lớp.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div> 
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>