@extends('user.layouts.app_user')
@section('content')
<section class="headerTop2">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center py-3">
                <a href="{{ route('user.profile.index') }}" class="text-dark" style="position: absolute; left: 15px;">
                    <i class="fa fa-angle-left fs-5 fw-light"></i>
                </a>
                <p class="fw-bold m-0 fs-5">Account details</p>
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
                <div class="col-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="all" data-bs-toggle="pill" data-bs-target="#all_tab"
                                type="button" role="tab" aria-controls="all_tab" aria-selected="true">All</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pending" data-bs-toggle="pill" data-bs-target="#pending_tab"
                                type="button" role="tab" aria-controls="pending_tab"
                                aria-selected="false">Pending</button>
                        </li>


                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="complated" data-bs-toggle="pill"
                                data-bs-target="#complated_tab" type="button" role="tab" aria-controls="complated_tab"
                                aria-selected="false">Complated</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Cancelled" data-bs-toggle="pill"
                                data-bs-target="#cancelled_tab" type="button" role="tab" aria-controls="cancelled_tab"
                                aria-selected="false">Cncelled</button>
                        </li>



                    </ul>
                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="all_tab" role="tabpanel" aria-labelledby="all"
                            tabindex="0">
                            <!-- Desktop Tabel -->
                            <table class="table table-sm desktop_table">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Tr. ID</th>
                                        <th scope="col">Number</th>
                                        <th scope="col">Pay Method</th>
                                        <th scope="col">Pay Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <th scope="row">Melon</th>
                                        <td>Amount</td>
                                        <td>Id</td>
                                        <td>Phonenumber</td>
                                        <td>
                                            Melon
                                        </td>
                                        <td>10-12-2023</td>
                                        <td>
                                            <a href="#" style="background: darkturquoise;" class="status_btn">Pending</a>
                                            {{-- <a href="#" class="status_btn">Aproved</a>
                                            <a href="#" style="background: red;" class="status_btn">Rejected</a> --}}
                                        </td>
                                        <td scope="row" class="text-center">
                                            <a href="" class="btn-sm btn-success rounded-pill mb-3">Aprove</a>
                                            <a href="" class="btn-sm btn-danger rounded-pill mb-3">Rejecte</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <!-- Desktop Tabel -->



                            <!-- Tabel For Mobile -->
                            <table class="table table-sm mobile_tabel">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col" class="text-center">Data</th>
                                    </tr>
                                </thead>
                                        {{-- loop start here --}}
                                        <tbody style="margin-bottom: 3px">
                                            <tr>
                                                <th scope="row">Name</th>
                                                <td class="text-center">Melon</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Amount</th>
                                                <td class="text-center">Amount</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tr. ID</th>
                                                <td class="text-center">Amount</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Number</th>
                                                <td class="text-center">Amount</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pay Method</th>
                                                <td class="text-center">
                                                    Amount
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Pay Date</th>
                                                <td class="text-center">Amount</td>
                                            </tr>

                                            <tr>
                                                <th scope="row">Status</th>
                                                <td class="text-center">
                                                    <a href="#" style="background: darkturquoise;" class="status_btn">Pending</a>
                                                    {{-- <a href="#" class="status_btn">Aproved</a>
                                                    <a href="#" style="background: red;" class="status_btn">Rejected</a> --}}
                                                </td>
                                            </tr>
                                            <tr style="border-bottom-width: 10px;">
                                                <th scope="row">Action</th>
                                                <td class="text-center">
                                                    <a href="" class="btn-sm btn-success rounded-pill mb-3">Aprove</a>
                                                    <a href="" class="btn-sm btn-danger rounded-pill mb-3">Rejecte</a>
                                                </td>
                                            </tr>
                                        </tbody>
                            {{-- loop end here --}}
                            </table>
                            <!-- Tabel For Bobile -->
                        </div>

                        <div class="tab-pane fade" id="pending_tab" role="tabpanel" aria-labelledby="pending"
                            tabindex="0">
                            Tab Content pending
                        </div>

                        <div class="tab-pane fade" id="complated_tab" role="tabpanel" aria-labelledby="complated"
                            tabindex="0">
                            Tab Content complated
                        </div>



                        <div class="tab-pane fade" id="cancelled_tab" role="tabpanel" aria-labelledby="cancelled"
                            tabindex="0">
                            Tab Content cancelled
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
