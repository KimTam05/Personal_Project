<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $users = User::paginate(5);
        return view('admin.account.list', ['users' => $users, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.account.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge([
            'status' => $request->input('status', 0), // Gán giá trị mặc định là 0 nếu không có
        ]);
        $request->validate([
            'username'=>'required|min:6',
            'password'=>'required|min:6',
            'confirm_password'=>'required|same:password',
            'status'=> 'required|in:0,1',
        ]);
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect('/admin/admin-user')->with('message', 'Tạo tài khoản thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user)
    {
        $auth_data = Auth::user();
        $users = User::where('id', $user)->first();
        return view('admin.account.edit', ['user'=>$auth_data, 'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user)
    {
        $request->validate([
            'username'=>'required|min:6',
            'password'=>'required|min:6',
            'status'=> 'required|in:0,1',
        ]);
        $data = $request->except('_token');
        $data['password'] = bcrypt($data['password']);
        User::where('id', $user)->update($data);
        return redirect('/admin/admin-user')->with(['message'=>'Chỉnh sửa thành công!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user)
    {
        User::where('id', $user)->delete();
        return redirect('/admin/admin-user')->with(['message'=>'Xóa thành công!']);
    }
}
