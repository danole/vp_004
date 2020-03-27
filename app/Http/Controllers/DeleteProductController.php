<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeleteProductModel;

class DeleteProductController extends Controller
{
    public function deleteProduct(Request $request)
    {
        $allProduct = DeleteProductModel::selectProduct();
        $submit = $request->input('submit');
        $id = $request->input('id');
        if (!empty($submit)) {
            DeleteProductModel::deleteProduct($id);
            return redirect()->route('successfulAdmin');
        }
        return view('admin/deleteProduct', [
            'allProduct' => $allProduct
        ]);
    }
}
