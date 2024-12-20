<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = Auth::user();
        $category = Category::paginate(10);
        return view('admin.category.list', ['user' => $auth, 'category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $auth = Auth::user();
        return view('admin.category.create', ['user'=>$auth]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>'required|unique:category,category_id',
            'category_name'=>'required',
            'status'=>'required|in:0,1',
        ]);
        $data = $request->only('category_id', 'category_name', 'status');
        Category::create($data);
        return redirect('/admin/category')->with(['message'=>'Danh mục đã được thêm mới']);
    }

    /**
     * Display the specified resource.
     */
    public function show($category)
    {
        $auth = Auth::user();
        $show = Category::where('id', $category)->first();
        return view('admin.category.detail', ['user' => $auth, 'category' => $show]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($category)
    {
        $auth = Auth::user();
        $edit = Category::where('id', $category)->first();
        return view('admin.category.edit', ['user' => $auth, 'category' => $edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $category)
    {
        $request->validate([
            'category_name'=>'required',
            'status'=>'required|in:0,1',
        ]);
        $data = $request->all();
        Category::where('id', $category)->update($data);
        return redirect('/admin/category')->with('message', 'Sửa thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category)
    {
        Category::where('id', $category)->delete();
        return redirect('admin/category')->with(['message'=>'Xóa thành công']);
    }
}
