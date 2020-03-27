<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AllOrdersModel;

class AllOrdersController extends Controller
{
    public function allOrders()
    {
        $orders = AllOrdersModel::selectOrders();
        return view('admin/allOrders', ['orders' => $orders]);
    }
}
