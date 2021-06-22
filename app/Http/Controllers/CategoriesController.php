<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Redirect;

class CategoriesController extends Controller
{
    public function selectedCategories($id) {
        $products = Product::get();
        return view('selectedCategories', compact('id', 'products'));
    }
}
