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
                    <form id="demo-form2" class="form-horizontal form-label-left" method="POST" action="{{ route('admin.deposit.address.store') }}">
                        @csrf
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="currency">Select Currency <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select name="currency" id="currency" class="form-control" required>
                                    <option {{ old('currency') == 'TRC20' ? 'selected' : '' }} value="TRC20">USDT-TRC20</option>
                                    <option {{ old('currency') == 'ERC20' ? 'selected' : '' }} value="ERC20">USDT-ERC20</option>
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
                                <input type="text" id="address" value="{{ old('address') }}" required="required" name="address" class="form-control" placeholder="xsd**************">
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="address"> <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>

                    <table class="table mt-3 table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">SI</th>
                            <th scope="col">Currency</th>
                            <th scope="col">Address</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($addresses as $address)
                                <tr>
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{ $address->currency }}</td>
                                    <td>{{ $address->address }}</td>
                                    <td>
                                        <a href="{{ route('admin.depositAddress.edit', $address->id) }}" class="btn btn-primary">Edit</a>

                                        <a href="{{ route('admin.depositAddress.delete', $address->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty

                            @endforelse

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
