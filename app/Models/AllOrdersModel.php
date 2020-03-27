<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AllOrdersModel extends Model
{
    public static function selectOrders()
    {
        return DB::table('buy')->select("*")->get();
    }
}
