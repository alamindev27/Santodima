<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Image;

class AdminSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required | image | mimes:jpg,png,jpeg'
        ]);
        $profileImg = time().Str::random(5).'.'.$request->file('image')->getClientOriginalExtension();
        $path = 'sliders/';
        Image::make($request->file('image'))->resize(750, 250)->save(public_path($path.$profileImg));

        Slider::insert([
            'image' => $path.$profileImg,
            'created_at' => Carbon::now()
        ]);

        return back()->with('success', 'Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find(Crypt::decrypt($id));
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required | image | mimes:jpg,png,jpeg'
        ]);

        $slider = Slider::find(Crypt::decrypt($id));

        if ($request->hasFile('image')) {
            unlink(public_path($slider->image));
            $profileImg = time().Str::random(5).'.'.$request->file('image')->getClientOriginalExtension();
            $path = 'sliders/';
            Image::make($request->file('image'))->resize(750, 250)->save(public_path($path.$profileImg));
            $slider->update([
                'image' => $path.$profileImg
            ]);
            return back()->with('success', 'Updated Successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
