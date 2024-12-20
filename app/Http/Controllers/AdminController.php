<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Admin Account
    public function index(){
        $user = Auth::user();
        $user_count = User::count();
        $category_count = Category::count();
        $product_count = Product::count();
        return view('admin.index', ['user'=>$user, 'user_count' => $user_count, 'category_count' => $category_count, 'product_count' => $product_count]);
    }
    public function login(){
        return view('admin.login');
    }
    public function loginSubmit(Request $request){
        $request->validate([
            'username' => 'required|exists:users',
            'password' => 'required',
        ]);
        $data = $request -> only('username', 'password');
        $user = User::where('username',$request['username'])->first();
        if(auth()->attempt($data) && $user && Hash::check($data['password'], $user->password)){
            if($user->status == 0){
                Auth::login($user);
                return redirect()->route('admin.index');
            }
            else{
                return redirect()->back()->withErrors(['message' => 'Account is banned!']);
            }
        }

        return redirect()->back()->withErrors(['message' => 'Password is incorrect!']);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
