@extends('admin.layouts.master')
@section('title', 'Thông tin sản phẩm')
@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin sản phẩm</h3>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Mã sản phẩm:
                        {{ $product->product_id }}
                    </p>
                    <p>Tên sản phẩm:
                        {{ $product->product_name }}
                    </p>

                    <p>Ảnh:</p>
                    <img src="{{asset('storage/'. $product->image)}}" style="width: 150px; height: 150px" alt="">
                    <p class="pt-2">Số lượng:
                        {{ $product->amount }}
                    </p>
                    <p>Đơn giá:
                        {{ $product->cost }}
                    </p>

                    <p>Mã danh mục:
                        {{ $product->category_id }}
                    </p>

                    <p>Trạng thái:
                        {{ $product->status == 0 ? "Còn hàng":"Hết hàng" }}
                    </p>

                </div>
                <div class="card-footer">
                    <a href="/admin/product" class="btn btn-secondary">Trở lại</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
@endsection
