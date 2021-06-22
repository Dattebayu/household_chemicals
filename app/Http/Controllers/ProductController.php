<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Redirect;

class ProductController extends Controller
{
  public function moreProduct($id) {
      $product = Product::find($id);
      return view('one-product', compact( 'product'));
  }

  public function addProduct(Request $req) {
      $product = new Product;
      $product->categories_id = $req->input('categories_id');
      $product->name = $req->input('name');
      $product->code = $req->input('code');
      $product->description = $req->input('description');
      $product->image = $req->input('image');
      $product->price = $req->input('price');

      $product->save();

      return redirect()->route('index');
  }

  public function editProduct($id) {
      $product = Product::find($id);
      return view('one-product-edit', compact( 'product'));
  }

  public function editProductComplite(Request $req, $id) {
      $product = Product::find($id);
      $product->categories_id = $req->input('categories_id');
      $product->name = $req->input('name');
      $product->code = $req->input('code');
      $product->description = $req->input('description');
      $product->image = $req->input('image');
      $product->price = $req->input('price');

      $product->save();

      return redirect()->route('more-details', $id);
  }

  public function deleteProduct($id) {
      Product::find($id)->delete();
      return redirect()->route('index');
  }





  public function vProduct() {
      $product = Product::get();
      return $product;
  }
}
