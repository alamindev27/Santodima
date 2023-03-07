@extends('user.layouts.app_user')
@section('styles')
<style>
    .header_under{
        height: 18rem;
    }

    .financialCardTop{
        background-color: #eef4fe;
        box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);
        border-radius: 15px;
    }

    .topupInput{
        height: 56px;
        background-color: #EEF1F7 !important;
        border: none;
    }
    .topupInput::placeholder{
        color: #CAC9CC;
    }

    .transferBtn{
        margin-left: .533333rem;
        display: inline-block;
        padding: 5px 13px;
        border-radius: 50px;
        background: #ff9a23;
        color: #fff;
        border: none;
        font-size: 18px;
    }
</style>
@endsection
@section('content')


<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-2">
                <div class="left">
                    <a href="{{ route('user.index') }}" class="text-white" style="position: absolute; left: 15px;">
                        <i class="fa fa-angle-left fs-5 fw-light"></i>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <p class="fw-bold m-0 fs-5 text-center">Financial Wallet</p>
            </div>
            <div class="col-4 col-md-4">
                <div class="right">
                    <span>
                        &nbsp;
                    </span>
                </div>
            </div>
        </div>
    </div>

</header>
<!--  -->

<!--  -->
<div class="header_under"></div>
<!--  -->


<!--  -->
<section id="options_bar" class="margin-bottom35" style="margin-top: 80px;">
    <div class="container-fluid">
        <div class="d-block d-md-flex px-3" style="margin: 0px 10px;background: #fff;border-radius: 15px;padding: 15px 0;">
            <div class="w-100 mt-2 mt-md-0 text-center py-2 py-md-3 financialCardTop mx-2">
                <p>Total assets</p>
                <p class="text-danger fw-bold">0.00</p>
            </div>

            <div class="w-100 mt-2 mt-md-0 text-center py-2 py-md-3 financialCardTop mx-2">
                <p>Financial Wallet</p>
                <p class="text-danger fw-bold">0.00</p>
            </div>

            <div class="w-100 mt-2 mt-md-0 text-center py-2 py-md-3 financialCardTop mx-2">
                <p>Total profit</p>
                <p class="text-danger fw-bold">0.00</p>
            </div>
            <div class="w-100 mt-2 mt-md-0 text-center py-2 py-md-3 financialCardTop mx-2">
                <p>Yesterday's earnings</p>
                <p class="text-danger fw-bold">0.00</p>
            </div>

        </div>
    </div>
</section>
<!--  -->



<section id="options_bar" class="margin-bottom35">
    <div class="container-fluid">
        <div class=" px-3"style="margin: 0px 10px;background: #fff;border-radius: 15px;padding: 15px 0;box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);">
            <h5 class="mb-3">Balance transfer in</h5>
            <input type="number" id="inputId" name="amount" class="form-control topupInput mb-2" placeholder="Enter the amount to be transfer">
            <div class="d-flex justify-coontent-start align-items-center my-4">
                <p class="my-0 me-3">Balance : 0.00</p>
            <button type="button" class="transferBtn" onclick="balanceAll('100')">Transfer all</button>
            </div>
        </div>
    </div>
</section>





<section id="options_bar" class="margin-bottom35">
    <div class="container-fluid">
        <div class="px-3">
            <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-warning btn-md-lg text-white fw-bold px-2 px-md-5 py-1 py-md-3">Transfer Out</button>
                <button class="btn btn-primary btn-md-lg fw-bold px-2 px-md-5 py-1 py-md-3">Transfer Intro</button>
            </div>
        </div>
    </div>
</section>
<br><br><br><br><br><br><br>


@endsection
