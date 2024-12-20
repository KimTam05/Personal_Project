@extends('admin.layouts.master')
@section('title', 'Create Admin Account')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h1>Thêm tài khoản quản trị viên mới</h1>
                <form action="" method="post">
                    @csrf
                    <div class="form-group my-2">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter your name">
                        @error('username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="">Confirm Password</label>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm your password">
                        @error('confirm_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <input type="submit" value="Tạo tài khoản" class="btn btn-primary my-2">
                    <a href="/admin/admin-user" class="btn btn-outline-secondary">Hủy</a>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
@endsection
