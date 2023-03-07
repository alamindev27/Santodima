@extends('user.layouts.app_user')
@section('content')
<header id="inner_header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Order record</h4>
            </div>
        </div>
    </div>

</header>
<!--  -->

<!--  -->
<section id="RemainingAvailable" class="text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-0 col-md-4"></div>
            <div class="col-md-4">
                <div class="content">
                    <h4>Remaining available assets</h4>
                    <span class="blance">
                        <p>0.00</p>
                        <i class="fa-solid fa-eye"></i>
                    </span>

                    <p>Accumulated Order Commission 0.00</p>
                    <p>Accumulated Team Commission 0.00</p>
                </div>
            </div>
            <div class="col-0 col-md-4"></div>
        </div>
    </div>
</section>
<!--  -->




<!--  -->
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
<!--  -->
@endsection
