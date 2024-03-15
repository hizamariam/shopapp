<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::paginate(10);
        return view('admin.products.index',compact('products'));
    }
    public function create()
    {
        $product=new Product();
        return view("admin.products.create",compact('product'));
    }
    public function edit(Product $product)
    {
        $data['product']=$product;
        return view('admin.products.create',$data);

    }

    public function update(Product $product)
    {
        $product->jina=request('jina');
        $product->maelezo=request('maelezo');
        $product->bei=request('bei');
        $product->save();

        return redirect('/admin/products');
    }

    public function store()
    {
        $product=new Product();
        $product->jina=request()->jina;
        $product->maelezo=request()->maelezo;
        $product->bei=request()->bei;
        $product->save();

        return redirect('/admin/products');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/admin/products');
    }
}
