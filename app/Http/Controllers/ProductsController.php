<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dump($products);

        return view('pages.products', [
            'data' => $products
        ]);
    }

    public function create(Route $route)
    {
        return view('products.create',[
            'hide'=> 'hide'
        ]);
    }

    public function store()
    {
        $product = new Product();
        
        $product->slug = request('slug');
        $product->title = request('title');
        $product->body = request('body');
        $product->alt = request('alt');
        $product->image = request()->image->store('uploads', 'public');
        $product->image = '/storage/'.$product->image;

        $product->save();

        return redirect('/products');
    }

    public function show($id)
    {
        $product = Product::find($id);
        
        return view('products.show', [
            'product' => $product
        ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        
        return view('products.edit', [
            'product' => $product,
            'hide'=> 'hide'
        ]);
    }
}
