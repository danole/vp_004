<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        $id = $request->input("id");
        $order = ProductModel::productFromBase($id);
        return view('product', ['order' => $order, 'id' => $id]);
    }
}
