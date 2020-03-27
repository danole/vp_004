<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EditCategoryModel extends Model
{
    public static function selectAllCategory()
    {
        return DB::table('category')->select('*')->get();
    }
}
