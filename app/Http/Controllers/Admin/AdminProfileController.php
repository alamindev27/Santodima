<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view('admin.profiles.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'image | mimes:jpg, png, jpeg'
        ]);
        $phone = $request->phone ? $request->phone : null;

        if ($request->hasFile('image')) {
            $arr = explode('/', auth()->user()->image);
            $img = end($arr);
            if ($img != 'default-profile.png') {
                unlink(auth()->user()->image);
            }
            $file = $request->file('image');
            $fileName = time().'-profile-image.'.$file->getClientOriginalExtension();
            $path = 'images/profile/';
            $request->image->move($path, $fileName);

            User::where('id', auth()->user()->id)->update([
                'image' => $path. $fileName,
            ]);
        }

        User::where('id', auth()->user()->id)->update([
            'name' => $request->name,
            'phone' => $phone,
        ]);
        return back()->with('success', 'Updated Successfully');
    }
}
