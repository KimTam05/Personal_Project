@extends('admin.layouts.master')
@section('title','Product')
@section('content')
<div class="container my-3">
    <div class="col-md-12">
        <div class="card mb-4">
            @if (isset($message))
                <h3>{{ $message }}</h3>
            @endif
            <div class="card-header">
                <h3 class="card-title">Bảng danh sách sản phẩm</h3>
            </div> <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Số lượng</th>
                            <th>Đơn giá</th>
                            <th>Mã danh mục</th>
                            <th>Trạng thái</th>
                            <th class="text-center">Tùy chỉnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 0;
                        @endphp
                        @foreach ($product as $item)
                        @php
                            $stt++;
                        @endphp
                            <tr>
                                <td>{{ $stt }}</td>
                                <td>{{ $item->product_id }}</td>
                                <td>{{ $item->product_name }}</td>
                                <td><img src="{{asset('storage/' . $item->image)}}" style="width: 150px; height: 150px"></td>
                                <td>{{ $item->amount }}</td>
                                <td>{{ $item->cost }}</td>
                                <td>{{ $item->category_id }}</td>
                                <td>{{ $item->status == 0 ? "Còn hàng":"Hết hàng" }}</td>
                                <td class="text-center">
                                    <a href="/admin/product/{{$item->id}}" class="btn btn-outline-secondary"><i class="fa-solid fa-circle-info"></i></a>
                                    <a href="/admin/product/{{$item->id}}/edit" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="/admin/product/{{$item->id}}/delete" class="btn btn-outline-danger" onclick=""><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- /.card-body -->
            <div class="card-footer clearfix">
                <a href="/admin/product/create" class="btn btn-success">Thêm mới</a>
                <ul class="pagination pagination-sm m-0 float-end">
                    <li class="page-item"> <a class="page-link" href="{{ $product->previousPageUrl() }}">«</a> </li>
                    <li class="page-item"> <a class="page-link" href="{{ $product->currentPage() }}">{{ $product->currentPage() }}</a> </li>
                    <li class="page-item"> <a class="page-link" href="{{ $product->nextPageUrl() }}">»</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
