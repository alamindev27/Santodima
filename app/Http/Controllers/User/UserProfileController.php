<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WithdrawMethod;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('user.profile.index');
    }

    public function personalInfo()
    {
        return view('user.profile.personalInfo');
    }

    public function headPortrait()
    {
        return view('user.profile.headPortrait');
    }

    public function updateHeadPortrait(Request $request)
    {
        $request->validate([
            'headPortrait' => 'required'
        ]);
        User::find(auth()->user()->id)->update([
            'image' => $request->headPortrait
        ]);
        return back()->with('success', 'Updated Successfully');
    }


    public function bankCard()
    {
        return view('user.profile.bankCard');
    }

    public function addBankCard()
    {
        return view('user.profile.addBankCard');
    }

    public function bankCardInsert(Request $request)
    {
        $request->validate([
            'real_name' => 'required | string | min:3 | max:91',
            'email' => 'required | email | string',
            'network' => 'required | string',
            'networks_address' => 'required | string',
        ]);
        $method = WithdrawMethod::where('user_id', auth()->user()->id)->exists();
        if (!$method) {
            $phone = $request->phone ? $request->phone : null;
            $address = $request->address ? $request->address : null;

            WithdrawMethod::insert([
                'user_id' => auth()->user()->id,
                'real_name' => $request->real_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'network' => $request->network,
                'networks_address' => $request->networks_address,
                'created_at' => Carbon::now()
            ]);

            return back()->with('success', 'Added Successfully');
        }else{
            return back()->with('error', 'Payment method already added.');
        }
    }


    public function loginPassword()
    {
        return view('user.profile.loginPassword');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required | min:6 | max:21',
            're_type_password' => 'required'
        ]);

        $oldPass = $request->old_password;
        $newPss = $request->new_password;
        $conPass = $request->re_type_password;

        if (!Hash::check($oldPass, auth()->user()->password)) {
            return back()->with('oldPassNotMatch', 'Old password not match.');
         }else{
            if ($newPss != $conPass) {
                return back()->with('oldPassNotMatch', 'Confirm password not match.');
            }else{
                User::find(auth()->user()->id)->update([
                    'password' => Hash::make($newPss)
                ]);
                return back()->with('success', 'Updated Successfully');
            }
         }
    }
}
