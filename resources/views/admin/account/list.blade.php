@extends('admin.layouts.master')
@section('title','Admin Account')
@section('content')
<div class="container my-3">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title">Bảng danh sách tài khoản quản trị viên</h3>
            </div> <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10%">#</th>
                            <th style="width: 30%">Tên tài khoản</th>
                            <th style="width: 30%">Trạng thái</th>
                            <th style="width: 30%">Label</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 0;
                        @endphp
                        @foreach ($users as $item)
                        @php
                            $stt++;
                        @endphp
                            <tr>
                                <td>{{ $stt }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->status == 0 ? "Đang hoạt động":"Đã khóa" }}</td>
                                <td><a href="" class="btn btn-outline-secondary">Detail</a>
                                    <a href="" class="btn btn-outline-primary">Edit</a>
                                    <a href="" class="btn btn-outline-danger">Delete</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> <!-- /.card-body -->
            <div class="card-footer clearfix">
                <a href="/admin/admin-user/create" class="btn btn-success">Thêm mới</a>
                <ul class="pagination pagination-sm m-0 float-end">
                    <li class="page-item"> <a class="page-link" href={{ $users->previousPageUrl() }}"">«</a> </li>
                    <li class="page-item"> <a class="page-link" href="">{{ $users->currentPage() }} of {{ $users->lastPage() }}</a> </li>
                    <li class="page-item"> <a class="page-link" href="{{ $users->nextPageUrl() }}">»</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection