<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    public static function productFromBase($id)
    {
        return DB::table('orders')->where('id', '=', $id)->get();
    }
}
