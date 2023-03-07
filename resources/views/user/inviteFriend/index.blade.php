@extends('user.layouts.app_user')
@section('styles')
<style>
    .header_bottom {
        background-image: url('{{ asset('frontend') }}/img/invitation-bg.png');
        width: 100%;
        height: 20rem;
        top: 0;
        left: 0;
        right: 0;
        z-index: -1;
    }

    #RemainingAvailable {
        margin-bottom: 40px;
        background: #fff;
        margin-top: -129px;
        margin-left: 5%;
        border-radius: 19px;
        margin-right: 5%;
        padding: 20px 0;
        box-shadow: 0.026667rem 0.026667rem 0.106667rem rgb(51 51 51 / 30%);
    }
</style>
@endsection
@section('content')
<div class="page-content">
    <header style="background-image: url('img/invitation-bg.png');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{ route('user.profile.index') }}" class="text-white" style="position: absolute; left: 15px;">
                        <i class="fa fa-angle-left fs-5 fw-light"></i>
                    </a>
                    <h4 class="text-center">Promotion reward</h4>
                </div>
            </div>
        </div>
    </header>
    <!--  -->
    <div class="header_bottom"></div>


    <!--  -->
    <section id="RemainingAvailable" class="text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <div>
                            <img src="{{ asset('frontend') }}/img/qrcode.png" alt="">
                        </div>

                        <button class="submit-btn">Save the QR code</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <section id="RemainingAvailable" class="text-center mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h4  class="text-dark">Invitation code: {{ auth()->user()->ref_code }}</h4>
                        <input type="hidden" value="{{ route('user.index') }}/register?referCode={{ auth()->user()->ref_code }}" id="myInput">
                        <button class="submit-btn" style="width: 100px;" onclick="myFunction()">Copy</button>
                        <h5 class="text-dark">Invitation link: <br> {{ route('user.index') }}/register?referCode={{ auth()->user()->ref_code }}</h5>

                        <button class="submit-btn">Save the QR code</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
</div>
@endsection

@section('scripts')
<script>
    function myFunction() {
      var copyText = $('#myInput').val();
      navigator.clipboard.writeText(copyText);
      Swal.fire('You have successfully copied');
    }
</script>
@endsection
