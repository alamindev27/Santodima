@extends('user.layouts.app_user')
@section('styles')
    <style>
        .form-check-input {
            width: 2em;
            height: 2em;
            border-radius: 50% !important;
        }

        .dipositBtn{
            width: 150px;
            height: 50px;
            border: none;
            border-radius: 25px;
            color: #fff;
            font-weight: 700;
            font-size: 18px;
        }

        .topupInput{
            height: 56px;
            background-color: #EEF1F7 !important;
            border: none;
        }
        .topupInput::placeholder{
            color: #CAC9CC;
        }
    </style>
@endsection
@section('content')
<div class="page-content">
    <div class="header margin-bottom35">
        <div class="container-fluid bg-white p-4" style="box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('user.index') }}" class="text-dark" style="position: absolute; left: 15px;">
                        <i class="fa fa-angle-left fs-5 fw-light"></i>
                    </a>
                    <p class="fw-bold m-0 fs-5">Withdraw</p>
                </div>
            </div>
        </div>
    </div>



    <form action="" method="POST">
        @csrf
        <div class="container-fluid">
            <div class="bg-white mx-2 mx-md-3 info-area p-3">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('dmnf'))
                    <div class="alert alert-danger">
                        {{ session('dmnf') }}
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <h5 class="fw-bold d-inline">Withdraw amount：</h5> <small class="text-danger">Handling fee 2.00%</small>
                <input type="number" id="amount" name="amount" class="form-control topupInput mb-2" placeholder="Enter the withdrawal amount">

                <ul class="px-4">
                    <li class="list-unstyled border-bottom py-2 py-md-3">
                        <h4 class="text-dark fw-bold pforileMenu">Balance: {{ auth()->user()->balance }}</h4>
                    </li>

                    <li class="list-unstyled border-bottom py-2 py-md-3">
                        <h4 class="text-dark fw-bold pforileMenu">Orders completed today(50):0</h4>
                    </li>

                    <li class="list-unstyled border-bottom py-2 py-md-3">
                        <h4 class="text-dark fw-bold pforileMenu">Number of withdrawals today:1</h4>
                    </li>

                    <li class="list-unstyled border-bottom py-2 py-md-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="text-dark fw-bold pforileMenu">Select withdrawal method:</h4>
                            <i class="fa fa-angle-right fs-5 fw-light text-secondary"></i>
                        </div>

                    </li>
                    <li class="list-unstyled border-bottom py-2 py-md-3">
                        <h4 class="text-dark fw-bold pforileMenu">Transaction password</h4>
                    </li>
                </ul>


                <div class="text-center">
                    <button type="submit" class="dipositBtn bg-primary">Confirm</button>
                </div>
            </div>
            <div class="bg-white mx-2 mx-md-3 info-area mt-3 p-3">
                <p>1.The amount of every single withdrawal is between <span class="text-danger">$30 ~ $10000000</span></p>
                <p>2. Every member will receive their funds within <span class="text-danger">24~ 168</span> hours after they make the withdrawal request at the platform. There will be a transaction handling fee for every withdrawal and the minimum amount for every withdrawal is <span class="text-danger">$30</span>.</p>
                <p>3. Every account must complete a minimum of <span class="text-danger">50</span> orders daily in order to make any withdrawal.</p>
            </div>

        </div>
    </form>




</div>
@endsection
