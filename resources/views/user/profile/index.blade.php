@extends('user.layouts.app_user')
@section('content')
    <header style="overflow: hidden;">
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

                        <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="text-white" style="margin-left: 10px">
                            <i class="fa fa-right-from-bracket"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-start align-items-center text-white">
                        <img src="{{ asset(auth()->user()->image) }}" alt="" class="me-3" width="100">
                        <div class="">
                            <div class="d-flex justify-content-start align-items-center">
                                <h6 class="me-3 fw-bold">{{ auth()->user()->name }}</h6>
                                <em class="vip_img">Lvl 1</em>
                            </div>
                            <p class="mb-0">Invitation Code: <b>{{ auth()->user()->ref_code }}</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="balance_wrap fz14 mb-0 mb-md-2" style="background-image: url({{ asset('frontend') }}/img/profile-wrap-bg.png); background-repeat: no-repeat;">
                        <div class="d-inline d-sm-flex justify-content-between ">
                            <div class="px-3 pt-3">
                                <p class="text-nowrap m-0" id="show"> Available balance  <i class="fa fa-eye"></i></p>
                                <h5 class="fz16 balance fw-bold" id="balance">
                                    *******
                                </h5>
                            </div>
                            <div class="d-flex justify-content-start align-items-center p-0 p-md-3">
                                <button onclick="return window.location.href='{{ route('user.deposit.index') }}'" class="diposit-btn me-3">Diposit</button>
                                <button onclick="return window.location.href='{{ route('user.withdraw.index') }}'" class="withdraw-btn">Withdraw</button>
                            </div>
                        </div>
                        <div class="text-center">
                            <i class="fa-solid fa-angles-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--  -->
    <section class="info-section">
        <div class="container-fluid pb-5">
            <div class="row">
                <div class="col-12">
                    <div class="mx-2 mx-md-5 bg-white info-area info">
                        <ul>
                            <li class="list-unstyled border-bottom py-3"><a href="{{ route('user.profile.personalInfo') }}"><h4 class="text-dark fw-normal"><i class="fa fa-users text-danger me-2 me-md-3"></i> Personal Info</h4></a></li>
                            <li class="list-unstyled border-bottom py-3"><a href="{{ route('user.order.index') }}"><h4 class="text-dark fw-normal"><i class="fa-regular fa-clock text-danger me-2 me-md-3"></i> Order Record</h4></a></li>
                            <li class="list-unstyled border-bottom py-3"><a href="{{ route('user.accountDetails.index') }}"><h4 class="text-dark fw-normal"><i class="fa fa-file-lines text-danger me-2 me-md-3"></i> Account Details</h4></a></li>
                            <li class="list-unstyled border-bottom py-3"><a href="{{ route('user.teamReport.index') }}"><h4 class="text-dark fw-normal"><i class="fa fa-user-group text-danger me-2 me-md-3"></i> Team Reports</h4></a></li>
                            <li class="list-unstyled border-bottom py-3"><a href="{{ route('user.announcement.index') }}"><h4 class="text-dark fw-normal"><i class="fa fa-bullhorn text-danger me-2 me-md-3"></i> Announcement</h4></a></li>
                            <li class="list-unstyled border-bottom py-3"><a href="{{ route('user.inviteFriends.index') }}"><h4 class="text-dark fw-normal"><i class="fa fa-user-plus text-danger me-2 me-md-3"></i> Friends Invitation</h4></a></li>
                            <i class=""></i>
                            <li class="list-unstyled border-bottom py-3"><a href="#"><h4 class="text-dark fw-normal"><i class="fa fa-cloud-arrow-down text-danger me-2 me-md-3"></i> App Download</h4></a></li>
                            <li class="list-unstyled border-bottom py-3"><a href="#"><h4 class="text-dark fw-normal"><i class="fa fa-file-circle-question text-danger me-2 me-md-3"></i> Help Guide</h4></a></li>
                            <li class="list-unstyled border-bottom py-3"><a href="#"><h4 class="text-dark fw-normal"><i class="fa fa-rotate text-danger me-2 me-md-3"></i> Update Check</h4></a></li>
                            <li class="list-unstyled border-bottom py-3"><a href="{{ route('user.googleAuth') }}"><h4 class="text-dark fw-normal"><i class="fa-brands fa-google-plus text-danger me-2 me-md-3"></i> Google Verification</h4></a></li>
                            <li class="list-unstyled border-bottom py-3"><a href="#"><h4 class="text-dark fw-normal"><i class="fa-brands fa-magento text-danger me-2 me-md-3"></i> Agent Logo</h4></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
<script>
    $('#show').click(function(){
        $('#balance').text('{{ auth()->user()->balance }}');
        $('#show').attr('id', 'hide');
    });

</script>
@endsection
