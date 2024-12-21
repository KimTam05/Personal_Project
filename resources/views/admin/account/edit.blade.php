@extends('admin.layouts.master')
@section('title','Edit Admin Account')
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
                    <input type="text" name="username" class="form-control" value="{{ $users->username }}">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" value="{{ $users->password }}">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Trạng thái</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="status" value='0' {{ $user->status == 0 ? "checked": " " }}>
                        <label for="" class="form-check-label">Đang hoạt động</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="status" value='1' {{ $user->status == 1 ? "checked": " " }}>
                        <label for="" class="form-check-label">Đã khóa</label>
                    </div>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <input type="submit" value="Sửa tài khoản" class="btn btn-primary my-2">
                <a href="/admin/admin-user" class="btn btn-outline-secondary">Hủy</a>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection
