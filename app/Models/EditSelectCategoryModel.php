<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EditSelectCategoryModel extends Model
{
    public static function selectChangeCategory($id)
    {
        return DB::table('category')->select('*')->where('id', '=', $id)->get();
    }

    public static function updateChangeCategory($id, $title, $description)
    {
        DB::table('category')->where('id', '=', $id)->update([
            'title' => $title,
            'description' => $description
        ]);
    }
}
