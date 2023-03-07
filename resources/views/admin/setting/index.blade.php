@extends('admin.layouts.app_admin')
@section('content')
@php
        $setting = DB::table('settings')->find(1);
    @endphp
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Setting</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                @include('admin.partials.setting-nav')
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="site_name">Site Name * :</label>
                                <input type="text" id="site_name" class="form-control" name="site_name" value="{{ old('site_name') ? old('site_name') : $setting->site_name }}">
                                @error('site_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="logo">Logo * :</label>
                                <input type="file" id="logo" class="form-control" name="logo">
                                <img src="{{ asset($setting->logo) }}" alt="" style="width:50px; margin-top:5px">
                                @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="favicon">Favicon * :</label>
                                <input type="file" id="favicon" class="form-control" name="favicon">
                                <img src="{{ asset($setting->favicon) }}" alt="" style="width:50px; margin-top:5px">
                                @error('favicon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                  </div>




            </div>
        </div>
    </div>



</div>




@endsection


