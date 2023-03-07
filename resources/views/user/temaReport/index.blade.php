@extends('user.layouts.app_user')
@section('content')
<section class="headerTop2">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center py-3">
                <a href="{{ route('user.profile.index') }}" class="text-dark" style="position: absolute; left: 15px;">
                    <i class="fa fa-angle-left fs-5 fw-light"></i>
                </a>
                <p class="fw-bold m-0 fs-5">Team reports</p>
            </div>
        </div>
    </div>
</section>

 <section class="page-content ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <form action="" class="headPortrait mb-3 accountDetails">
                    <div class="d-flex justify-content-start align-items-center">
                        <input type="date" class="form-control">
                        <button class="btn btn-primary search-btn btn-lg">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<section id="history_tabel">
    <div class="container-fluid">
        <div class="row mx-0">
            <div class="col-12 bg-white rounded py-3">
             <div class="row">
                <div class="col-md-6 my-2">
                    <div class="report-bg text-center pb-3 pb-md-4 pt-2 pt-md-3">
                        <h5 class="fw-bold">Team balance</h5>
                        <h5 class="fw-bold text-primary">0.00</h5>
                    </div>
                </div>

                <div class="col-md-6 my-2">
                    <div class="report-bg text-center pb-3 pb-md-4 pt-2 pt-md-3">
                        <h5 class="fw-bold">Team cash flow</h5>
                        <h5 class="fw-bold text-primary">0.00</h5>
                    </div>
                </div>


                <div class="col-md-6 my-2">
                    <div class="report-bg text-center pb-3 pb-md-4 pt-2 pt-md-3">
                        <h5 class="fw-bold">Team deposit</h5>
                        <h5 class="fw-bold text-primary">0.00</h5>
                    </div>
                </div>


                <div class="col-md-6 my-2">
                    <div class="report-bg text-center pb-3 pb-md-4 pt-2 pt-md-3">
                        <h5 class="fw-bold">Team withdrawal</h5>
                        <h5 class="fw-bold text-primary">0.00</h5>
                    </div>
                </div>

                <div class="col-md-6 my-2">
                    <div class="report-bg text-center pb-3 pb-md-4 pt-2 pt-md-3">
                        <h5 class="fw-bold">Team order commission</h5>
                        <h5 class="fw-bold text-primary">0.00</h5>
                    </div>
                </div>


                <div class="col-md-6 my-2">
                    <div class="report-bg text-center pb-3 pb-md-4 pt-2 pt-md-3">
                        <h5 class="fw-bold">First time depositor</h5>
                        <h5 class="fw-bold text-primary">0.00</h5>
                    </div>
                </div>

                <div class="col-md-6 my-2">
                    <div class="report-bg text-center pb-3 pb-md-4 pt-2 pt-md-3">
                        <h5 class="fw-bold">First-level members</h5>
                        <h5 class="fw-bold text-primary">0</h5>
                    </div>
                </div>


                <div class="col-md-6 my-2">
                    <div class="report-bg text-center pb-3 pb-md-4 pt-2 pt-md-3">
                        <h5 class="fw-bold">Team size</h5>
                        <h5 class="fw-bold text-primary">0</h5>
                    </div>
                </div>

                <div class="col-md-6 my-2">
                    <div class="report-bg text-center pb-3 pb-md-4 pt-2 pt-md-3">
                        <h5 class="fw-bold">New members today</h5>
                        <h5 class="fw-bold text-primary">0</h5>
                    </div>
                </div>

                <div class="col-md-6 my-2">
                    <div class="report-bg text-center pb-3 pb-md-4 pt-2 pt-md-3">
                        <h5 class="fw-bold">Active members today</h5>
                        <h5 class="fw-bold text-primary">0</h5>
                    </div>
                </div>


             </div>
            </div>
        </div>
    </div>
</section>

@endsection
