@extends('layouts.App')

@section('title', 'About - TodoList App')

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

                <div class="container mt-5 d-flex justify-content-center">
                    <a href="{{ url('/register') }}" class="btn btn-dark w-25">Start</a>
                </div>

            </div>

            <!-- Hình ảnh minh hoạ bên phải -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/To-do-image.jpg') }}" alt="TodoList Illustration" class="img-fluid rounded shadow " style="max-width: 70% ">
                {{-- {{}} để in ra giá trị của hàm asset tạo ra đường dẫn đến file nằm trong thư mục public --}}
            </div>
        </div>
    </div>
@endsection
