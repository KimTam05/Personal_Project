@extends('admin.layouts.master')
@section('title', 'Create Admin Account')
@section('content')
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter your name">
            @error('username')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter your password">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm your password">
            @error('confirm_password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button class="btn btn-primary" type="submit">Add Account</button>
        <a href="#" class="btn btn-outline-secondary">Cancel</a>
    </form>
@endsection
