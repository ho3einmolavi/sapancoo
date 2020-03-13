<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest('id')->get();
        return view('products' , [
            'products' => $products ,
            'title' => 'محصولات'
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'description' => 'required' ,
            'image' => 'required|image' ,
        ]);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/products'), $name);
            Product::create([
                'title' => $request->title,
                'description' => $request->description ,
                'image' => $name ,
            ]);
            return back()->with('message', 'محصول ایجاد شد');
        }

        return 'something went wrong';
    }

    public function create()
    {
        return view('admin_panel.create-product');
    }

    public function show()
    {
        $products = Product::latest('id')->get();

        return view('admin_panel.products' , [
            'products' => $products
        ]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin_panel.edit-product' , [
            'product' => $product
        ]);
    }

    public function update($id , Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'description' => 'required' ,
            'image' => 'required' ,
        ]);
        $blog = Product::findOrFail($id);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/products'), $name);
            $blog->update([
                'title' => $request->title,
                'description' => $request->description ,
                'image' => $name ,
            ]);
            return redirect()->back()->with('message', 'product updated');
        }

        return 'something went wrong';
    }
}
