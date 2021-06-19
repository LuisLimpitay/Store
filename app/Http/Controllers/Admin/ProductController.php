<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    public function create()
    {
        $category = Category::pluck('name', 'id');
        $products = Product::all();
        return view ('admin.products.create', compact('category', 'products'));

    }


    public function store(StoreProductRequest $request)
    {
        
        $products = Product::create($request->all());
        return redirect()->route('admin.products.index', $products)
                            ->with('info', 'Curso agregado con exito !!!');;
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        $category = Category::pluck('name', 'id');
        return view ('admin.products.edit', compact('product', 'category'));

    }
    

    public function update(UpdateProductRequest $request, Product $product)
    {

        $product->update($request->all());
        return redirect()->route('admin.products.index', $product)
                            ->with('info', 'Producto editado con exito !!!');;
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')
                            ->with('info', 'Producto eliminado con exito !!!');;
    }

}
