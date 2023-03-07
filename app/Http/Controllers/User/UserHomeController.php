<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function yuEBao()
    {
        return view('user.yuEBao');
    }

    public function promotionReward()
    {
        return view('user.promotionReward');
    }


    public function companyProfile()
    {
        return view('user.companyProfile');
    }

    public function vipEvents()
    {
        return view('user.vipEvents');
    }

    public function tutorial()
    {
        return view('user.tutorial');
    }

    
    public function googleAuth()
    {
        return view('user.googleAuth');
    }


}
