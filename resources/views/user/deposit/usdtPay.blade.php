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
                    <p class="fw-bold m-0 fs-5">Top-up Method</p>
                </div>
            </div>
        </div>
    </div>



    <form action="{{ route('user.deposit.usdtPay.store') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $_GET['depositMethod'] }}" name="depositMethod">
        <div class="container-fluid">
            <div class="bg-white mx-2 mx-md-5 info-area p-3">

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

                <p>Transfer Channel:</p>
                <h5 class="fw-bold">USDT Top-up</h5>
                <input type="number" id="amountInput" name="amount" class="form-control topupInput mb-2" placeholder="Please input the number of USDT to be traded(25~1000000)">

                <button type="button" onclick="depositAmount('100')" class="btn btn-outline-warning px-4 fw-bold my-2 mx-1 mx-md-2">100</button>
                <button type="button" onclick="depositAmount('200')" class="btn btn-outline-warning px-4 fw-bold my-2 mx-1 mx-md-2">200</button>
                <button type="button" onclick="depositAmount('300')" class="btn btn-outline-warning px-4 fw-bold my-2 mx-1 mx-md-2">300</button>
                <button type="button" onclick="depositAmount('500')" class="btn btn-outline-warning px-4 fw-bold my-2 mx-1 mx-md-2">500</button>
                <button type="button" onclick="depositAmount('1000')" class="btn btn-outline-warning px-4 fw-bold my-2 mx-1 mx-md-2">1000</button>
                <button type="button" onclick="depositAmount('2000')" class="btn btn-outline-warning px-4 fw-bold my-2 mx-1 mx-md-2">2000</button>
                <button type="button" onclick="depositAmount('3000')" class="btn btn-outline-warning px-4 fw-bold my-2 mx-1 mx-md-2">3000</button>
                <button type="button" onclick="depositAmount('5000')" class="btn btn-outline-warning px-4 fw-bold my-2 mx-1 mx-md-2">5000</button>
                <button type="button" onclick="depositAmount('10000')" class="btn btn-outline-warning px-4 fw-bold my-2 mx-1 mx-md-2">10000</button>
                <button type="button" onclick="depositAmount('20000')" class="btn btn-outline-warning px-4 fw-bold my-2 mx-1 mx-md-2">20000</button>
                <button type="button" onclick="depositAmount('30000')" class="btn btn-outline-warning px-4 fw-bold my-2 mx-1 mx-md-2">30000</button>
                <button type="button" onclick="depositAmount('50000')" class="btn btn-outline-warning px-4 fw-bold my-2 mx-1 mx-md-2">50000</button>
                <div class="text-center">
                    <button type="submit" class="dipositBtn bg-primary">Confirm</button>
                    <p class="text-primary my-2">Diposit Guide</p>
                </div>
            </div>
            <div class="bg-white mx-2 mx-md-5 info-area mt-3 p-3">
                <p>The amount of USDT for every single top-up: <span class="text-danger">25~1000000</span></p>
                <p>1. Please enter the correct amount of USDT and wallet address.</p>
                <p>2. Please contact our online customer service if the amount is not shown or errors.</p>
                <p>3. Please do not repeatedly submit the order after complete the transfer, submit only once.</p>
                <p>4. Please keep your transfer voucher properly. We will not be responsible for any stolen transfer voucher.</p>
            </div>

        </div>
    </form>



</div>
@endsection

@section('scripts')
    <script>
        $('input[type="checkbox"]').on('change', function() {
            $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        });

        function depositAmount(amnt){
            $('#amountInput').val(amnt);
        }
    </script>

@endsection
