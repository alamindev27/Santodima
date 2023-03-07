<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserTeamReportController extends Controller
{
    public function index()
    {
        return view('user.temaReport.index');
    }
}
