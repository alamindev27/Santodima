@extends('admin.layouts.app_admin')
@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Commission</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_content">
                <div class="col-md-9 col-sm-9">
                    <div class="x_content">
                        <br>
                        <form class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST" action="{{ route('admin.commission.update') }}">
                            @csrf
                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3 ">Commission 1</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="number" value="{{ old('commission1') ? old('commission1') : $commission->commission1 }}" class="form-control" step=".1" name="commission1" placeholder="Enter amount">
                                    @error('commission1')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="ln_solid"></div>

                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3 ">Commission 2</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="number" value="{{ old('commission2') ? old('commission2') : $commission->commission2 }}" class="form-control" step=".1" name="commission2" placeholder="Enter amount">
                                    @error('commission2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="ln_solid"></div>

                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <button type="submit" class="btn btn-success">Save</button>
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
