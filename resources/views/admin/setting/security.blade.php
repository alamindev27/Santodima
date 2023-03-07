@extends('admin.layouts.app_admin')
@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Security Setting</h3>
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
                        <h3>Change E-mail</h3>
                        <hr>
                        <form action="{{ route('admin.security.email.update') }}" method="POST" class="mb-5">
                            @csrf
                            <div class="mb-3">
                                <label for="email">E-mail * :</label>
                                <input type="text" id="email" class="form-control" name="email" value="{{ old('email') ? old('email') : auth()->user()->email }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Update Email</button>
                        </form>

                        <h3>Change Password</h3>
                        <hr>
                        <form action="{{ route('admin.security.password.update') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="new_password">New Password * :</label>
                                <input type="password" id="new_password" class="form-control" name="new_password" placeholder="*****">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password">Confirm Password * :</label>
                                <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="*****">
                                @if (session('notMatchError'))
                                    <span class="text-danger">{{ session('notMatchError') }}</span>
                                @endif
                                @error('confirm_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Update Password</button>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection


