<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Image;
use Illuminate\Support\Str;

class AdminSettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_name' => 'required | max:255',
            'logo' => 'image|mimes:jpeg,png,jpg|max:15000',
            'favicon' => 'image|mimes:jpeg,png,jpg|max:15000'
        ]);
        $setting = Setting::find(1);

        if($request->hasFile('logo')){
            $oldLogo = explode('/', $setting->logo);
            $logo = end($oldLogo);
            if($logo != 'default-logo.png')
            {
                unlink($setting->logo);
            }
            $logoName = time().Str::random(5).'.'.$request->file('logo')->getClientOriginalExtension();
            $logoPath = 'images/logo/';
            Image::make($request->file('logo'))->resize(173, 56)->save($logoPath.$logoName);
            $setting->update([
                'logo' => $logoPath.$logoName,
            ]);
        }

        if($request->hasFile('favicon')){

            $oldFav = explode('/', $setting->favicon);
            $fav = end($oldFav);

            if($fav != 'default-favicon.png')
            {
                unlink($setting->favicon);
            }
            $favIconName = time().Str::random(5).'.'.$request->file('favicon')->getClientOriginalExtension();
            $favPath = 'images/logo/';
            Image::make($request->file('favicon'))->save($favPath.$favIconName);
            $setting->update([
                'favicon' => $favPath.$favIconName,
            ]);
        }
        $setting->update([
            'site_name' => $request->site_name,
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function security()
    {
        return view('admin.setting.security');
    }

    public function emailUpdate(Request $request)
    {
        $request->validate([
            'email' => 'required | email | string | unique:users'
        ]);

        User::find(auth()->user()->id)->update([
            'email' => $request->email
        ]);
        return back()->with('success', 'Updated Successfully');
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'new_password' => 'required | min:6 | max:30',
            'confirm_password' => 'required'
        ]);

        if ($request->new_password != $request->confirm_password) {
            return back()->with('notMatchError', 'Confirmation password not match');
        }else{
            User::where('id', auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);
            return back()->with('success', 'Updated Successfully');
        }
    }
}
