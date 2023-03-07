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



<!-- Main Item Select -->
<ul class="nav nav-pills nav-justified mb-3 shadow p-3 mb-5 bg-body rounded" id="ex1" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#general-activities" role="tab"
        aria-controls="pills-login" aria-selected="true">general activities</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#Progressive-rewards" role="tab"
        aria-controls="pills-register" aria-selected="false">Progressive rewards</a>
    </li>
</ul>


<div class="tab-content">
    <div class="tab-pane fade show active text-white" id="general-activities" role="tabpanel" aria-labelledby="general-activities">
        <!-- |First Section  Start |Hear-->
<div class="section-1 my-4 bg-white ">
    <!-- ======================================================================================================= -->
    <!-- =======================================Tabe Section Hear=============================================== -->
    <!-- ======================================================================================================= -->
    <ul class="nav nav-pills nav-justified mb-3 " id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
        <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
            aria-controls="pills-login" aria-selected="true">All</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#In-Progress" role="tab"
            aria-controls="pills-register" aria-selected="false">In Progress</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#Not-Started" role="tab"
            aria-controls="pills-register" aria-selected="false">Not Started</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#Ended" role="tab"
            aria-controls="pills-register" aria-selected="false">Ended</a>
        </li>
    </ul>
    <!--======================= Tab Click  Item  Start Hear=========================== -->
    <div class="tab-content">
        <!-- All Section -->
        <div class="tab-pane fade show active text-danger" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <section class="page-content-2 ">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-12" >
                            <div class="py-3 ">
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/invite.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/unlock.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/every.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/begginner.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/member.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/unlock-mor.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/put-your.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/what-usd.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-muted pb-4">
                            <h5>no more data </h5>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- In Progress Section-->
        <div class="tab-pane fade text-danger" id="In-Progress" role="tabpanel" aria-labelledby="tab-register">
            <section class="page-content-2 ">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-12" >
                            <div class="py-3 ">
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/invite.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/unlock.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/every.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/begginner.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/member.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/unlock-mor.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/put-your.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white info-area p-1 p-md-3 bankForm shadow p-3 mb-5 bg-body rounded">
                                    <div class="section-2">
                                        <div class="" style="width:100% ;" >
                                            <img src="{{ asset('frontend') }}/img/what-usd.jpg" class="card-img-top" alt="invite" style="width:100% ; height: 150px;">
                                            <div class="card-body">
                                                <p class="h3 text-center">Accumulate Referral Rewards</p>
                                            <p class="text-danger h5 text-center"> Up to $299</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-muted pb-4">
                            <h5>no more data </h5>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Not Started Section-->
        <div class="tab-pane fade text-danger" id="Not-Started" role="tabpanel" aria-labelledby="tab-register">
            <div class="text-center text-muted py-5">
                <h5>no more data </h5>
            </div>
        </div>
        <!-- Ended Section -->
        <div class="tab-pane fade text-danger" id="Ended" role="tabpanel" aria-labelledby="tab-register">
            <div class="text-center text-muted py-5">
                <h5>no more data </h5>
            </div>
        </div>
    </div>
    <!--======================= Tab Click  Item  End Hear=========================== -->
    <!-- ======================================================================================================= -->
    <!-- =======================================Tabe Section Hear=============================================== -->
    <!-- ======================================================================================================= -->
</div>
<!-- |First Section End |Hear-->
    </div>
</div>
<div class="tab-content">
    <div class="tab-pane fade show active text-white" id="Progressive-rewards" role="tabpanel" aria-labelledby="Progressive-rewards">
        <div class="container-fluid">
            <img src="{{ asset('frontend') }}/img/red-bg-img.jpg" alt="" class="img-fluid w-100 ">
            <p class="h5 text-bold text-dark py-4">After reaching the reward conditions and before the end of the event, you can apply for the reward. After applying for the reward, the system will automatically issue the reward. Please pay attention to the distribution status or check the balance details.</p>



            <!-- Table -->
            <div class="container mt-3">
                <h2>Bordered Table</h2>
                <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
            </div>
            <table class="table table-bordered shadow p-3 mb-5 bg-body rounded">
                <thead class="text-center" style="background-color: #EEF4FE;">
                  <tr>
                    <th>Reward Conditions</th>
                    <th>Apply</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <tr>
                    <td>Number of direct sub...</td>
                    <td>9.90</td>
                  </tr>
                  <tr>
                      <td>Number of direct sub...</td>
                      <td>59.00</td>
                  </tr>
                  <tr>
                      <td>Number of direct sub...</td>
                      <td>149.00</td>
                  </tr>
                  <tr>
                      <td>Number of direct sub...</td>
                      <td>299.00</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
<!-- Main Item Select -->

@endsection
@section('scripts')
<script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
@endsection
