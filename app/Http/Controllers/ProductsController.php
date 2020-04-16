<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function create()
    {
        return view('products.create');
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
}
