@extends('admin.layouts.app_admin')
@section('content')
<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Add Deposit Address</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_content" style="display: block;">
                    <br>
                    <form id="demo-form2" class="form-horizontal form-label-left" method="POST" action="{{ route('admin.depositAddress.update', $data->id) }}">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="currency">Select Currency <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select name="currency" id="currency" class="form-control" required>
                                    <option {{ $data->currency == 'TRC20' ? 'selected' : '' }} value="TRC20">USDT-TRC20</option>
                                    <option {{ $data->currency == 'ERC20' ? 'selected' : '' }} value="ERC20">USDT-ERC20</option>
                                </select>
                                @error('currency')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="address" value="{{ $data->address }}" required="required" name="address" class="form-control" placeholder="xsd**************">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="address"> <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <button class="btn btn-success" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
