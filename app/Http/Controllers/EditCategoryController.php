<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EditCategoryModel;

class EditCategoryController extends Controller
{
    public function editCategory()
    {
        $allCategory = EditCategoryModel::selectAllCategory();
        return view('admin/editCategory', ['allCategory' => $allCategory]);
    }
}
