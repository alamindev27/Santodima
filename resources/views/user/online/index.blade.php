@extends('user.layouts.app_user')
@section('content')

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-2">
                <div class="left">
                    <i class="fa-regular fa-bell"></i>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="logo">
                    <img src="{{ asset('frontend') }}/img/logo.png" class="" alt="">
                </div>
            </div>
            <div class="col-4 col-md-4">
                <div class="right">
                    <i class="fa-solid fa-earth-americas"></i>
                    <span>
                        UTC-5
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<!--  -->
<br>
<!-- <div class="header_under"></div> -->

<section class="margin-bottom35 mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="py-2 text-dark online-alert-top">
                If you have any questions or encounter issues, please email us or chat with our online customer support team.
            </div>
        </div>
    </div>
</section>

<section class="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 mt-3">
                <a href="#">
                    <div class="card card-left-rounded">
                        <div class="card-body text-center p-0">
                        <h6 class="fw-bold card-title py-3 text-dark">Deposit/Withdraw Service</h6>
                        <img src="{{ asset('frontend') }}/img/service-1.jpg" alt="" class="img-fluid w-100 card-img-rounded" style="height: 115px;">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 mt-3">
                <a href="#">
                    <div class="card card-right-rounded">
                        <div class="card-body text-center p-0">
                        <h6 class="fw-bold card-title py-3 text-dark">Reward and Online Service</h6>
                        <img src="{{ asset('frontend') }}/img/service-2.jpg" alt="" class="img-fluid w-100 card-img-rounded" style="height: 115px;">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 mt-3">
                <a href="#">
                    <div class="card card-left-rounded">
                        <div class="card-body text-center p-0">
                        <h6 class="fw-bold card-title py-3 text-dark">Telegram Official Channel</h6>
                        <img src="{{ asset('frontend') }}/img/service-3.jpg" alt="" class="img-fluid w-100 card-img-rounded" style="height: 115px;">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 mt-3">
                <a href="#">
                    <div class="card card-right-rounded">
                        <div class="card-body text-center p-0">
                        <h6 class="fw-bold card-title py-3 text-dark">Twitter Official Channel</h6>
                        <img src="{{ asset('frontend') }}/img/service-4.png" alt="" class="img-fluid w-100 card-img-rounded" style="height: 115px;">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-6 mt-3">
                <a href="#">
                    <div class="card card-right-rounded">
                        <div class="card-body text-center p-0">
                        <h6 class="fw-bold card-title py-3 text-dark">Help Center (Change Password)</h6>
                        <img src="{{ asset('frontend') }}/img/service-5.jpg" alt="" class="img-fluid w-100 card-img-rounded" style="height: 115px;">
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

@endsection
