@extends('layouts.auth')

@section('title', 'Đăng ký')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4 border p-4 shadow rounded">
            <h2 class="mb-4 text-center">Đăng ký tài khoản</h2>

            <form action="{{ url('/register') }}" method="POST">
                @csrf <!-- Laravel bảo mật form -->

                <!-- Họ tên -->
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và tên</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Nhập họ tên" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Địa chỉ Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Nhập email" required>
                </div>

                <!-- Mật khẩu -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
                </div>

                <!-- Nhập lại mật khẩu -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Nhập lại mật khẩu" required>
                </div>

                <!-- Submit -->
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-dark w-50">Đăng ký</button>
                </div>
            </form>

            <p class="text-center mt-3">
                Đã có tài khoản? <a href="{{ url('/login') }}">Đăng nhập</a>
            </p>
        </div>
    </div>
</div>
@endsection
