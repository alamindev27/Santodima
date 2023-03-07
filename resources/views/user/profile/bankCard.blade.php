@extends('user.layouts.app_user')
@section('content')
<section class="headerTop2">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center py-3">
                <a href="{{ route('user.profile.personalInfo') }}" class="text-dark" style="position: absolute; left: 15px;">
                    <i class="fa fa-angle-left fs-5 fw-light"></i>
                </a>
                <p class="fw-bold m-0 fs-5">Withdrawal method</p>
            </div>
        </div>
    </div>
</section>

<section class="page-content ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="text-center py-3 headPortrait">
                    <button onclick="return window.location.href='{{ route('user.profile.addBankCard') }}'" class="submit-btn">Add Withdrawal Method</button>

                    <p style="text-align: left;" class="m-4">User can bind up to 1 withdrawal address. For safety purposes, the withdrawal address will be locked automatically after the funds has been successfully withdrawn on the first time. The withdrawal address cannot simply delete or modify. Please contact customer service if there is any changes required.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
