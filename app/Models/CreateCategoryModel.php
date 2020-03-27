<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CreateCategoryModel extends Model
{
    public static function insertCategory($title, $description)
    {
        DB::table('category')->insert([
            'title' => $title,
            'description' => $description
        ]);
    }
}
