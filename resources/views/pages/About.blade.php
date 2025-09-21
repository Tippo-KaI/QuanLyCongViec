@extends('layouts.App')

@section('title', 'Giới thiệu')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Nội dung giới thiệu bên trái -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h1 class="display-4 fw-bold mb-3">TodoList App</h1>
                <p class="lead text-muted mb-4">
                    Quản lý công việc hằng ngày một cách dễ dàng và hiệu quả, giúp bạn tập trung vào những việc quan trọng.
                </p>

                <ul class="list-unstyled mb-4">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Thêm, sửa, xóa công việc</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Đánh dấu công việc đã hoàn thành</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Quản lý danh sách công việc theo trạng thái</li>
                </ul>

                <p class="text-muted">
                    Xây dựng với <strong>Laravel</strong> & <strong>Bootstrap</strong>, giao diện hiện đại, responsive, dễ sử dụng.
                </p>
            </div>

            <!-- Hình ảnh minh hoạ bên phải -->
            <div class="col-md-6 text-center">
                <img src="https://thumbs.dreamstime.com/b/to-do-list-icon-hand-drawn-text-checklist-task-list-vecto-vector-illustration-flat-style-white-background-96388297.jpg" alt="TodoList Illustration" class="img-fluid rounded shadow w-75">
            </div>
        </div>
    </div>
@endsection
