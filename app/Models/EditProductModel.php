<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EditProductModel extends Model
{
    public static function selectAllProduct()
    {
        return DB::table('orders')->select('*')->get();
    }
}
