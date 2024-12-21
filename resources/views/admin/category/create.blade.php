@extends('admin.layouts.master')
@section('title', 'Thêm mới danh mục')
@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h1>Thêm danh mục mới</h1>
            <form action="" method="post">
                @csrf
                <div class="form-group my-2">
                    <label for="">Mã danh mục</label>
                    <input type="text" name="category_id" class="form-control" placeholder="Nhập mã danh mục">
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="category_name" class="form-control" placeholder="Nhập tên danh mục">
                    @error('category_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Trạng thái</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="status" value='0'>
                        <label for="" class="form-check-label">Đang mở</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="status" value='1'>
                        <label for="" class="form-check-label">Đã đóng</label>
                    </div>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <input type="submit" value="Tạo danh mục" class="btn btn-primary my-2">
                <a href="/admin/category" class="btn btn-outline-secondary">Hủy</a>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection
