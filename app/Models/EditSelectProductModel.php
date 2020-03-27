<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EditSelectProductModel extends Model
{
    public static function selectChangeProduct($id)
    {
        return DB::table('orders')->select('*')->where('id', '=', $id)->get();
    }

    public static function updateChangeProduct($productId, $title, $category_id, $price, $image, $description)
    {
        DB::table('orders')->where('id', '=', $productId)->update([
            'title' => $title,
            'category_id' => $category_id,
            'price' => $price,
            'image' => $image,
            'description' => $description
        ]);
    }
}
