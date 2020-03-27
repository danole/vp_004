<?php

namespace App\Http\Controllers;

use App\Models\EditSelectCategoryModel;
use Illuminate\Http\Request;
use App\Models\EditSelectProductModel;

class EditSelectProductController extends Controller
{
    public function editSelectProduct(Request $request)
    {
        $id = $request->input('id');
        $changeProduct = EditSelectProductModel::selectChangeProduct($id);
        $changeTitle = $changeProduct['0']->title;
        $changePrice = $changeProduct['0']->price;
        $changeCategory_id = $changeProduct['0']->category_id;
        $changeImage = $changeProduct['0']->image;
        $changeDescription = $changeProduct['0']->description;
        $changeId = $changeProduct['0']->id;
        $error = [];
        if (!empty($request->input('title') && $request->input('category_id'))
            && $request->input('price') && $request->input('image')
            && $request->input('description')) {
            $title = $request->input('title');
            $category_id = $request->input('category_id');
            $price = $request->input('price');
            $image = $request->input('image');
            $description = $request->input('description');
            $productId = $request->input('id');
            EditSelectProductModel::updateChangeProduct($productId, $title, $category_id, $price, $image, $description);
            return redirect()->route('successfulAdmin');
        } else {
            if (!empty($request->input('submit'))) {
                $error[] = "Заполните все поля";
            }
        }
        return view('admin/editSelectProduct', [
            'changeTitle' => $changeTitle,
            'changeDescription' => $changeDescription,
            'changeId' => $changeId,
            'changePrice' => $changePrice,
            'changeCategory_id' => $changeCategory_id,
            'changeImage' => $changeImage,
            'error' => $error
        ]);
    }
}
