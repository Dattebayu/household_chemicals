<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Redirect;

class ViewController extends Controller
{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Product::get();
        return view('home', compact('product'));
    }

    public function allProduct() {
      $product= Product::orderBy(Product::raw('RAND()'))->get();
      return view('allProduct', compact('product'));
    }

    public function categories() {
      $categories = Category::get();
      return view('categories', compact('categories'));
    }

    public function Cart() {
      $product = Cart::get();
      return view('Cart', compact('product'));
    }

    public function adminPanel() {
      return view('adminPanel');
    }
}
