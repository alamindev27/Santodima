@extends('user.layouts.app_user')
@section('content')
<section class="headerTop2">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center py-3">
                <a href="{{ route('user.profile.bankCard') }}" class="text-dark" style="position: absolute; left: 15px;">
                    <i class="fa fa-angle-left fs-5 fw-light"></i>
                </a>
                <p class="fw-bold m-0 fs-5">Add Withdrawal Method</p>
            </div>
        </div>
    </div>
</section>


<form action="{{ route('user.profile.BankCardInsert') }}" method="POST">
    @csrf

    <section class="page-content-2 ">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12" style="margin-top: 100px;">
                    <div class="py-3 ">
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ session('error') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <h5>Identity Information</h5>
                        <div class="bg-white info-area p-1 p-md-3 bankForm">
                            <table class="table">
                                <tr class="py-3">
                                    <td width="20">
                                        <p class="mb-0 me-0 me-md-5 text-nowrap">
                                            <span class="text-danger me-0 me-md-3 fw-bold">*</span> Real name
                                        </p>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="real_name" placeholder="Please enter real name">
                                    </td>
                                </tr>

                                <tr class="py-3">
                                    <td width="20">
                                        <p class="mb-0 me-0 me-md-5 text-nowrap">
                                            <span class="text-danger me-0 me-md-3 fw-bold">*</span> E-mail
                                        </p>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="email" placeholder="Please enter E-mail address">
                                    </td>
                                </tr>
                                <tr class="py-3">
                                    <td width="20">
                                        <p class="mb-0 me-0 me-md-5 text-nowrap">
                                            <span class="text-danger me-0 me-md-3 fw-bold">&nbsp;</span>Phone
                                        </p>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="phone" placeholder="Please enter phone number">
                                    </td>
                                </tr>
                                <tr class="py-3">
                                    <td width="20">
                                        <p class="mb-0 me-0 me-md-5 text-nowrap">
                                            <span class="text-danger me-0 me-md-3 fw-bold">&nbsp;</span>Addres
                                        </p>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="address" placeholder="Please enter address">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="py-3">
                    <h5>Withdrawal method information</h5>
                        <div class="bg-white info-area p-1 p-md-3 bankForm">
                            <table class="table">
                                <tr class="py-3">
                                    <td width="20">
                                        <p class="mb-0 me-0 me-md-5 text-nowrap">
                                            <span class="text-danger me-0 me-md-3 fw-bold">&nbsp;</span> Add Type
                                        </p>
                                    </td>
                                    <td>
                                        USDT
                                    </td>
                                </tr>

                                <tr class="py-3">
                                    <td width="20">
                                        <p class="mb-0 me-0 me-md-5 text-nowrap">
                                            <span class="text-danger me-0 me-md-3 fw-bold">*</span> Network
                                        </p>
                                    </td>
                                    <td>
                                        <select name="network" id="changeFunction">
                                            <option value="ERC20">ERC20</option>
                                            <option value="TRC20">TRC20</option>
                                            <option value="BEP20">BEP20</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr class="py-3">
                                    <td width="20">
                                        <p class="mb-0 me-0 me-md-5 text-nowrap">
                                            <span class="text-danger me-0 me-md-3 fw-bold">*</span> USDT- <span id="network">ERC20</span>
                                        </p>
                                    </td>
                                    <td>
                                        <input type="text" name="networks_address" placeholder="Please enter network address" class="form-control">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="py-3">
                        <div class="bg-white info-area p-1 p-md-3 bankForm">
                            <h5 class="text-center">Transaction password</h5>
                            {{-- <table class="table">
                                <tr class="py-3">
                                    <td width="20">
                                        <p class="mb-0 me-0 me-md-5 text-nowrap">
                                            <span class="text-danger me-0 me-md-3 fw-bold">&nbsp;</span> Add Type
                                        </p>
                                    </td>
                                    <td>
                                        USDT
                                    </td>
                                </tr>

                                <tr class="py-3">
                                    <td width="20">
                                        <p class="mb-0 me-0 me-md-5 text-nowrap">
                                            <span class="text-danger me-0 me-md-3 fw-bold">*</span> Network
                                        </p>
                                    </td>
                                    <td>
                                        <select name="" id="">
                                            <option value="">ERC20</option>
                                            <option value="">TRC20</option>
                                            <option value="">BEP20</option>
                                        </select>
                                    </td>
                                </tr>

                                <tr class="py-3">
                                    <td width="20">
                                        <p class="mb-0 me-0 me-md-5 text-nowrap">
                                            <span class="text-danger me-0 me-md-3 fw-bold">*</span> USDT-ERC20
                                        </p>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="Please enter network address" class="form-control">
                                    </td>
                                </tr>
                            </table> --}}

                            <div class="text-center py-3">
                                <button type="submit" class="submit-btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br>
    </section>
</form>
@endsection
@section('scripts')
    <script>
        $('#changeFunction').change(function(){
            var value = $(this).val();
            $('#network').text(value);
        });
    </script>
@endsection
