@extends('admin.layouts.master')
@section('title', 'Thông tin danh mục')
@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin danh mục</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Mã danh mục:
                        {{ $category->category_id }}
                    </p>
                    <p>Tên danh mục:
                        {{ $category->category_name }}
                    </p>

                    <p>Trạng thái: 
                        {{ $category->status == 0 ? "Đang mở":"Đã dóng" }}
                    </p>

                </div>
                <div class="card-footer">
                    <a href="/admin/category" class="btn btn-secondary">Trở lại</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection
