@extends('user.layouts.app_user')
@section('styles')
<style>
    .page-bg{
        background-color: #EEF1F7 !important;
    }
    .pageText{
        font-size: 18px;
        font: inherit;
        line-height: 2;
    }
    .bind-google-btn-style {
        padding: 18px 250px;
        background-color: #EE4D2D;
        border-radius: 32px;
        text-align: center;
    }
</style>
@endsection
@section('content')

<div class="page-bg sticky-top">
    <div class="header margin-bottom35 ">
        <div class="container-fluid bg-white p-4" style="box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('user.index') }}" class="text-dark" style="position: absolute; left: 15px;">
                        <i class="fa fa-angle-left fs-5 fw-light"></i>
                    </a>
                    <p class="fw-bold m-0 fs-5">Vip Events</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center">
    <div class="row text-center pb-5">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <p class="fw-bold">Google Verification</p>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6">
            <p class="fw-bold">unbound</p>
        </div>
    </div>
    <button onclick="return window.location.href=''" class="submit-btn">Add Withdrawal Method</button>
</div>

@endsection
