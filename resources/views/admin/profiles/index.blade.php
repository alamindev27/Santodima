@extends('admin.layouts.app_admin')
@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Profile</h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">

          <div class="x_content">
            <div class="col-md-3 col-sm-3 profile_left">
              <div class="profile_img">
                <div id="crop-avatar">
                  <!-- Current avatar -->
                  <img class="img-responsive avatar-view" width="150" src="{{ asset(auth()->user()->image) }}" alt="Avatar" title="{{ auth()->user()->name }}">
                </div>
              </div>
              <h3>{{ auth()->user()->name }}</h3>

              <ul class="list-unstyled user_data">
                <li>
                    @if (auth()->user()->location)
                    <i class="fa fa-map-marker user-profile-icon"></i> {{ auth()->user()->location }}
                    @endif
                </li>

                <li>
                    @if (auth()->user()->title)
                        <i class="fa fa-briefcase user-profile-icon"></i> {{ auth()->user()->title }}
                    @endif
                </li>

                <li class="m-top-xs">
                    @if (auth()->user()->website)
                        <i class="fa fa-external-link user-profile-icon"></i>
                        <a href="{{ auth()->user()->website }}" target="_blank">{{ auth()->user()->website }}</a>
                    @endif
                </li>
              </ul>
            </div>
            <div class="col-md-9 col-sm-9">
                <div class="x_content">
                    <br>
                    <form class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST" action="{{ route('admin.profile.update') }}">
                        @csrf

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Name</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{ old('name') ? old('name') : auth()->user()->name }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Phone Number</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone" value="{{ old('phone') ? old('phone') : auth()->user()->phone }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Image</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="file" class="form-control" name="image">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span> <br>
                                @enderror
                                <img src="{{ asset(auth()->user()->image) }}" alt="" width="100" class="border rounded mt-3">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
