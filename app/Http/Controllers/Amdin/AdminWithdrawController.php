<?php

namespace App\Http\Controllers\Amdin;

use App\Http\Controllers\Controller;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class AdminWithdrawController extends Controller
{
    public function index()
    {
        return view('admin.withdraw.index');
    }
}
