<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CreateProductModel extends Model
{
    public static function insertProduct($title, $category_id, $price, $image, $description)
    {
        DB::table('orders')->insert([
            'title' => $title,
            'category_id' => $category_id,
            'price' => $price,
            'image' => $image,
            'description' => $description
        ]);
    }
}
