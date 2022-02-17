<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $product = Products::all();
        return $product;
    }

    public function showById(Request $request)
    {
    $product= Products::where('product_id', '=' ,$request->id)->get();
    return $product;
    }
}
