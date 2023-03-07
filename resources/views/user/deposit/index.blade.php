@extends('user.layouts.app_user')
@section('styles')
    <style>
        .form-check-input {
            width: 2em;
            height: 2em;
            border-radius: 50% !important;
        }

        .dipositBtn{
            width: 100px;
            height: 50px;
            border: none;
            border-radius: 25px;
            color: #fff;
            font-weight: 700;
            font-size: 18px;
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



    <form action="{{ route('user.deposit.usdtPay') }}">
        <div class="container-fluid">
            <div class="bg-white mx-2 mx-md-5 info-area">
                <ul class="px-4">
                    <li class="list-unstyled border-bottom py-2 py-md-3">
                        <div class="userlabel d-flex justify-content-between align-items-center">
                            <label class="form-check-label h5 d-block" for="usdt1">USDT-TRC（Auto-deposit）</label>
                            <input class="form-check-input" checked type="checkbox" value="TRC" id="usdt1" name="depositMethod">
                        </div>
                    </li>
                </ul>
            </div>

            <div class="bg-white mx-2 mx-md-5 info-area">
                <ul class="px-4">
                    <li class="list-unstyled border-bottom py-2 py-md-3">
                        <div class="userlabel d-flex justify-content-between align-items-center">
                            <label class="form-check-label h5 d-block" for="usdt2">USDT TRC</label>
                            <input class="form-check-input" type="checkbox" value="TRC20" id="usdt2" name="depositMethod">
                        </div>
                    </li>
                </ul>
            </div>

            <div class="bg-white mx-2 mx-md-5 info-area">
                <ul class="px-4">
                    <li class="list-unstyled border-bottom py-2 py-md-3">
                        <div class="userlabel d-flex justify-content-between align-items-center">
                            <label class="form-check-label h5 d-block" for="usdt3">USDT ERC</label>
                            <input class="form-check-input" type="checkbox" value="ERC20" id="usdt3" name="depositMethod">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="text-center">
                <button type="submit" class="dipositBtn bg-primary">Next</button>
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
    </script>

@endsection
