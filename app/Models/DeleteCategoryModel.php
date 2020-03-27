<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DeleteCategoryModel extends Model
{
    public static function selectCategory()
    {
        return DB::table('category')->select('*')->get();
    }

    public static function deleteCategory($id)
    {
        DB::table('category')->where('id', '=', $id)->delete();
    }
}
