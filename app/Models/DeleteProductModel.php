<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DeleteProductModel extends Model
{
    public static function selectProduct()
    {
        return DB::table('orders')->select('*')->get();
    }

    public static function deleteProduct($id)
    {
        DB::table('orders')->where('id', '=', $id)->delete();
    }
}
