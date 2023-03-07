<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\WithdrawMethod;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    public function index()
    {
        return view('user.order.index');
    }
}
