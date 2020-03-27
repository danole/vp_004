<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function orders(Request $request)
    {
        $category = $request->input('category');
        $id = $request->input('id');
        $orders = CategoryModel::OrdersFromCategory($id);
        return view('orders', [
            'product' => $category,
            'id' => $id,
            'orders' => $orders
        ]);
    }
}
