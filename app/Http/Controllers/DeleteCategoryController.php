<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeleteCategoryModel;

class DeleteCategoryController extends Controller
{
    public function deleteCategory(Request $request)
    {
        $allCategory = DeleteCategoryModel::selectCategory();
        $submit = $request->input('submit');
        $id = $request->input('id');
        if (!empty($submit)) {
            DeleteCategoryModel::deleteCategory($id);
            return redirect()->route('successfulAdmin');
        }
        return view('admin/deleteCategory', [
            'allCategory' => $allCategory
        ]);
    }
}
