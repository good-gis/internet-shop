<?php

namespace App\Http\Controllers;

use App\Models\Category;

class MainController extends Controller
{
    public function index()
    {
        return view('main');
    }

    public function categories()
    {
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code)
    {
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function product($category, $product = null)
    {
        return view('product', ['product' => $product]);
    }

    public function basket()
    {
        return view('basket');
    }

    public function order()
    {
        return view('order');
    }
}
