@extends('admin.layouts.master')
@section('title', 'Thêm mới sản phẩm')
@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h1>Thêm sản phẩm mới</h1>
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-2">
                    <label for="">Mã sản phẩm</label>
                    <input type="text" name="product_id" class="form-control" placeholder="Nhập mã sản phẩm">
                    @error('product_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Nhập tên sản phẩm">
                    @error('product_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Ảnh</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Số lượng</label>
                    <input type="number" name="amount" class="form-control" placeholder="Nhập số lượng sản phẩm">
                    @error('amount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Đơn giá</label>
                    <input type="text" name="cost" class="form-control" placeholder="Nhập giá sản phẩm">
                    @error('cost')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Danh mục</label>
                    <select name="category_id" class="form-select" id="exampleFormControlSelect1">
                        <option value="" default>--Chọn danh mục-- </option>
                        @foreach ($category as $item)
                            <option value="{{ $item->category_id }}">{{ $item->category_name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group my-2">
                    <label for="">Trạng thái</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="status" value='0'>
                        <label for="" class="form-check-label">Còn hàng</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="status" value='1'>
                        <label for="" class="form-check-label">Hết hàng</label>
                    </div>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <input type="submit" value="Tạo sản phẩm" class="btn btn-primary my-2">
                <a href="/admin/product" class="btn btn-outline-secondary">Hủy</a>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection
