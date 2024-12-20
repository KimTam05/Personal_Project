@extends('admin.layouts.master')
@section('title','Category')
@section('content')
<div class="container my-3">
    <div class="col-md-12">
        <div class="card mb-4">
            @if (isset($message))
                <h3>{{ $message }}</h3>
            @endif
            <div class="card-header">
                <h3 class="card-title">Bảng danh sách danh mục</h3>
            </div> <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10%">#</th>
                            <th style="width: 20%">Mã danh mục</th>
                            <th style="width: 30%">Tên danh mục</th>
                            <th style="width: 20%">Trạng thái</th>
                            <th style="width: 20%" class="text-center">Tùy chỉnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 0;
                        @endphp
                        @foreach ($category as $item)
                        @php
                            $stt++;
                        @endphp
                            <tr>
                                <td>{{ $stt }}</td>
                                <td>{{ $item->category_id }}</td>
                                <td>{{ $item->category_name }}</td>
                                <td>{{ $item->status == 0 ? "Đang mở":"Đã đóng" }}</td>
                                <td class="text-center">
                                    <a href="/admin/category/{{$item->id}}" class="btn btn-outline-secondary"><i class="fa-solid fa-circle-info"></i></a>
                                    <a href="/admin/category/{{$item->id}}/edit" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="/admin/category/{{$item->id}}/delete" class="btn btn-outline-danger" onclick=""><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- /.card-body -->
            <div class="card-footer clearfix">
                <a href="/admin/category/create" class="btn btn-success">Thêm mới</a>
                <ul class="pagination pagination-sm m-0 float-end">
                    <li class="page-item"> <a class="page-link" href="{{ $category->previousPageUrl() }}">«</a> </li>
                    <li class="page-item"> <a class="page-link" href="{{ $category->currentPage() }}">{{ $category->currentPage() }}</a> </li>
                    <li class="page-item"> <a class="page-link" href="{{ $category->nextPageUrl() }}">»</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
