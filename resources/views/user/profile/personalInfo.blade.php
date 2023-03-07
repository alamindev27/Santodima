@extends('user.layouts.app_user')
@section('content')
<div class="page-content">
    <div class="header margin-bottom35">
        <div class="container-fluid bg-white p-4" style="box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('user.profile.index') }}" class="text-dark" style="position: absolute; left: 15px;">
                        <i class="fa fa-angle-left fs-5 fw-light"></i>
                    </a>
                    <p class="fw-bold m-0 fs-5">Personal Info</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="bg-white mx-2 mx-md-5 info-area">
            <ul class="px-4">
                <li class="list-unstyled border-bottom py-2 py-md-3">
                    <a href="{{ route('user.profile.headPortrait') }}" class="d-flex justify-content-between align-items-center">
                        <h4 class="text-dark fw-normal pforileMenu">Head portrait</h4>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset(auth()->user()->image) }}" alt="" width="30" class="me-2">
                            <i class="fa fa-angle-right fs-5 fw-light text-secondary"></i>
                        </div>
                    </a>
                </li>

                <li class="list-unstyled border-bottom py-2 py-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="text-dark fw-normal pforileMenu">Account</h4>
                        <h4 class="text-secondary fw-normal pforileMenu">{{ auth()->user()->name }}</h4>
                    </div>
                </li>

                <li class="list-unstyled border-bottom py-2 py-md-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="text-dark fw-normal pforileMenu">Mobile number</h4>
                        <h4 class="text-secondary fw-normal pforileMenu">{{ auth()->user()->phone }}</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <div class="container-fluid">
        <div class="bg-white mx-2 mx-md-5 info-area">
            <ul class="px-4">
                <li class="list-unstyled border-bottom py-2 py-md-3">
                    <a href="{{ route('user.profile.bankCard') }}" class="d-flex justify-content-between align-items-center">
                        <h4 class="text-dark fw-normal pforileMenu">Withdrawal method</h4>
                        <i class="fa fa-angle-right fs-5 fw-light text-secondary"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>



    <div class="container-fluid">
        <div class="bg-white mx-2 mx-md-5 info-area">
            <ul class="px-4">
                <li class="list-unstyled border-bottom py-2 py-md-3">
                    <a href="{{ route('user.profile.loginPassword') }}" class="d-flex justify-content-between align-items-center">
                        <h4 class="text-dark fw-normal pforileMenu">Login password</h4>
                        <i class="fa fa-angle-right fs-5 fw-light text-secondary"></i>
                    </a>
                </li>

                <li class="list-unstyled border-bottom py-2 py-md-3">
                    <a href="#" class="d-flex justify-content-between align-items-center">
                        <h4 class="text-dark fw-normal pforileMenu">Transaction password</h4>
                        <i class="fa fa-angle-right fs-5 fw-light text-secondary"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>


</div>
@endsection
