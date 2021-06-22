<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Redirect;

class CartController extends Controller
{
public function AddInCart ($id) {
    $product = Product::find($id);

    $categories_id = $product->categories_id;
    $name = $product->name;
    $code = $product->code;
    $description = $product->description;
    $image = $product->image;
    $price = $product->price;
    $product->delete();

    $cart = new Cart();
    $cart->categories_id = $categories_id;
    $cart->name = $name;
    $cart->code = $code;
    $cart->description = $description;
    $cart->image = $image;
    $cart->price = $price;
    $cart->save();

    return Redirect::back();
  }

  public function deleteProductCart ($id) {
    $cart = Cart::find($id);

    $categories_id = $cart->categories_id;
    $name = $cart->name;
    $code = $cart->code;
    $description = $cart->description;
    $image = $cart->image;
    $price = $cart->price;
    $updated_at = $cart->updated_at;
    $created_at = $cart->created_at;
    $cart->delete();

    $product = new Product();
    $product->categories_id = $categories_id;
    $product->name = $name;
    $product->code = $code;
    $product->description = $description;
    $product->image = $image;
    $product->price = $price;
    $product->updated_at = $updated_at;
    $product->created_at = $created_at;
    $product->save();

    return Redirect::back();
  }

  public function buyProductCart ($id) {
    Cart::find($id)->delete();
    return Redirect::back();
  }
}
