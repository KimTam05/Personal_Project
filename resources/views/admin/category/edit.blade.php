@extends('admin.layouts.master')
@section('title', 'Sửa danh mục')
@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h1>Sửa danh mục</h1>
            <form action="" method="post">
                @csrf
                <div class="form-group my-2">
                    <label for="">Mã danh mục</label>
                    <input type="text" name="category_id" class="form-control"  value="{{ $category->category_id }}">
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Tên danh mục</label>
                    <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}">
                    @error('category_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Trạng thái</label> <br>
                    <input type="radio" name="status" value=0 {{ $category->status == 0 ? "checked":" " }}> Đang mở
                    <input type="radio" name="status" value=1 {{ $category->status == 1 ? "checked":" " }}> Đã đóng
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <input type="submit" value="Sửa danh mục" class="btn btn-primary my-2">
                <a href="/admin/category" class="btn btn-outline-secondary">Hủy</a>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection
