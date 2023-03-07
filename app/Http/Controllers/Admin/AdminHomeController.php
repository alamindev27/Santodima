<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commission;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function commission()
    {
        $commission = Commission::find(1);
        return view('admin.commission.index', compact('commission'));
    }

    public function commissionUpdate(Request $request)
    {
        $request->validate([
            'commission1' => 'required',
            'commission2' => 'required'
        ]);

        Commission::find(1)->update([
            'commission1' => $request->commission1,
            'commission2' => $request->commission2
        ]);
        return back()->with('success', 'Updated Successfully');
    }
}
