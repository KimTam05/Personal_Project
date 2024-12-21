<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $auth = Auth::user();
        $product = Product::paginate(10);
        return view('admin.product.list', ['product'=>$product, 'user' => $auth]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $auth = Auth::user();
        $category = Category::all();
        return view('admin.product.create',['user'=>$auth, 'category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id'=>'required',
            'product_name'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'amount'=>'required|numeric',
            'cost'=>'required|numeric',
            'category_id'=>'required',
            'status'=>'required',
        ]);
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName(); // Đặt tên file
        $path = $file->storeAs('images', $filename, 'public');
        $data = $request->all();
        $data['image'] = $path;
        Product::create($data);
        return redirect('/admin/product')->with(['message'=>'Thêm mới thành công']);
    }

    /**
     * Display the specified resource.
     */
    public function show($product)
    {
        $auth = Auth::user();
        $show = Product::where('id', $product)->first();
        return view('admin.product.detail', ['user'=>$auth, 'product'=>$show]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product)
    {
        $auth = Auth::user();
        $category = Category::all();
        $edit = Product::where('id', $product)->first();
        return view('admin.product.edit',['user'=>$auth,'category'=>$category, 'product'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $product)
    {
        $request->validate([
            'product_id'=>'required',
            'product_name'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'amount'=>'required|numeric',
            'cost'=>'required|numeric',
            'caregory_id'=>'required',
            'status'=>'required',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('uploads', $imageName, 'public');
        $data = $request->all();
        Product::where('id', $product)->update($data);
        return redirect('/admin/product')->with(['message'=>'Sửa thành công']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        Product::where('id',$product)->delete();
        return redirect('/admin/product')->with(['message'=>'Xóa thành công']);
    }
}
