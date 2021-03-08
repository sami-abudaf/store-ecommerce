<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){

        //return view('admin.dashboard');

        $orders = Order::orderBy('id','DESC')->paginate(PAGINATION_COUNT);
        //return $orders;
        return view('admin.dashboard',compact('orders'));
    }
}
