@extends('admin.layouts.app_admin')
@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Tasks</h3>
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
                        <form class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST" action="{{ route('admin.task.store') }}">
                            @csrf
                            <div class="form-group row ">
                                <label class="control-label col-md-3 col-sm-3 ">File</label>
                                <div class="col-md-9 col-sm-9 ">
                                    <input type="file" class="form-control" name="file">
                                    @error('file')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <button type="submit" class="btn btn-success">Add Task</button>
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
