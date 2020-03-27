<?php

namespace App\Http\Controllers;

use App\Models\EditProductModel;

use Illuminate\Http\Request;

class EditProductController extends Controller
{
    public function editProduct()
    {
        $allProduct = EditProductModel::selectAllProduct();
        return view('admin/editProduct', ['allProduct' => $allProduct]);
    }
}
