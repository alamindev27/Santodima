@extends('admin.layouts.app_admin')
@section('styles')

@endsection
@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Custom Setting</h3>
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
                        @if (session('error'))
                            <div class="alert alert-danger">{{session('error')}}</div>
                        @endif
                        <form action="{{ route('admin.setting.custom.update') }}" method="POST" class="mb-5">
                            @csrf
                            <div class="mb-3">
                                <label for="styles">Header Styles :</label>
                                <textarea placeholder="Enter style with (style) tag" id="styles" class="form-control" name="styles" rows="5">{{ old('styles') }}</textarea>
                                @error('styles')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="scripts">Footer Scripts :</label>
                                <textarea placeholder="Enter script with (script) tag" name="scripts" id="scripts" class="form-control" rows="5">{{ old('scripts') }}</textarea>
                                @error('scripts')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-success">Add</button>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection


