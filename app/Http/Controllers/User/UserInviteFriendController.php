<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserInviteFriendController extends Controller
{
    public function index()
    {
        return view('user.inviteFriend.index');
    }
}
