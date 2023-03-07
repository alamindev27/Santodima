@extends('user.layouts.app_user')
@section('content')
<section  class="headerTop2">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center py-3">
                <a href="{{ route('user.profile.personalInfo') }}" class="text-dark" style="position: absolute; left: 15px;">
                    <i class="fa fa-angle-left fs-5 fw-light"></i>
                </a>
                <p class="fw-bold m-0 fs-5">Head portrait</p>
            </div>
        </div>
    </div>
</section>
<form action="{{ route('user.profile.headPortrait.update') }}" class="headPortrait" method="POST">
    @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 text-center mb-3 mb-md-5">
                <div class="userlabel">
                    <input class="form-check-input" type="checkbox" {{ auth()->user()->image == 'frontend/img/head/head1.png' ? 'checked' : '' }} value="frontend/img/head/head1.png" id="head1" name="headPortrait">
                    <label class="form-check-label" for="head1">
                        <img src="{{ asset('frontend') }}/img/head/head1.png" alt="" class="userImage">
                    </label>
                </div>
            </div>

            <div class="col-4 text-center mb-3 mb-md-5">
                <div class="userlabel">
                    <input class="form-check-input" type="checkbox" {{ auth()->user()->image == 'frontend/img/head/head2.png' ? 'checked' : '' }} value="frontend/img/head/head2.png" id="head2" name="headPortrait">
                    <label class="form-check-label" for="head2">
                        <img src="{{ asset('frontend') }}/img/head/head2.png" alt="" class="userImage">
                    </label>
                </div>
            </div>


            <div class="col-4 text-center mb-3 mb-md-5">
                <div class="userlabel">
                    <input class="form-check-input" type="checkbox" {{ auth()->user()->image == 'frontend/img/head/head3.png' ? 'checked' : '' }} value="frontend/img/head/head3.png" id="head3" name="headPortrait">
                    <label class="form-check-label" for="head3">
                        <img src="{{ asset('frontend') }}/img/head/head3.png" alt="" class="userImage">
                    </label>
                </div>
            </div>


            <div class="col-4 text-center mb-3 mb-md-5">
                <div class="userlabel">
                    <input class="form-check-input" type="checkbox" {{ auth()->user()->image == 'frontend/img/head/head4.png' ? 'checked' : '' }} value="frontend/img/head/head4.png" id="head4" name="headPortrait">
                    <label class="form-check-label" for="head4">
                        <img src="{{ asset('frontend') }}/img/head/head4.png" alt="" class="userImage">
                    </label>
                </div>
            </div>

            <div class="col-4 text-center mb-3 mb-md-5">
                <div class="userlabel">
                    <input class="form-check-input" type="checkbox" {{ auth()->user()->image == 'frontend/img/head/head5.png' ? 'checked' : '' }} value="frontend/img/head/head5.png" id="head5" name="headPortrait">
                    <label class="form-check-label" for="head5">
                        <img src="{{ asset('frontend') }}/img/head/head5.png" alt="" class="userImage">
                    </label>
                </div>
            </div>

            <div class="col-4 text-center mb-3 mb-md-5">
                <div class="userlabel">
                    <input class="form-check-input" type="checkbox" {{ auth()->user()->image == 'frontend/img/head/head6.png' ? 'checked' : '' }} value="frontend/img/head/head6.png" id="head6" name="headPortrait">
                    <label class="form-check-label" for="head6">
                        <img src="{{ asset('frontend') }}/img/head/head6.png" alt="" class="userImage">
                    </label>
                </div>
            </div>

            <div class="col-4 text-center mb-3 mb-md-5">
                <div class="userlabel">
                    <input class="form-check-input" type="checkbox" {{ auth()->user()->image == 'frontend/img/head/head7.png' ? 'checked' : '' }} value="frontend/img/head/head7.png" id="head7" name="headPortrait">
                    <label class="form-check-label" for="head7">
                        <img src="{{ asset('frontend') }}/img/head/head7.png" alt="" class="userImage">
                    </label>
                </div>
            </div>

            <div class="col-4 text-center mb-3 mb-md-5">
                <div class="userlabel">
                    <input class="form-check-input" type="checkbox" {{ auth()->user()->image == 'frontend/img/head/head8.png' ? 'checked' : '' }} value="frontend/img/head/head8.png" id="head8" name="headPortrait">
                    <label class="form-check-label" for="head8">
                        <img src="{{ asset('frontend') }}/img/head/head8.png" alt="" class="userImage">
                    </label>
                </div>
            </div>

            <div class="col-4 text-center mb-3 mb-md-5">
                <div class="userlabel">
                    <input class="form-check-input" type="checkbox" {{ auth()->user()->image == 'frontend/img/head/head9.png' ? 'checked' : '' }} value="frontend/img/head/head9.png" id="head9" name="headPortrait">
                    <label class="form-check-label" for="head9">
                        <img src="{{ asset('frontend') }}/img/head/head9.png" alt="" class="userImage">
                    </label>
                </div>
            </div>

            <div class="col-4 text-center mb-3 mb-md-5">
                <div class="userlabel">
                    <input class="form-check-input" type="checkbox" {{ auth()->user()->image == 'frontend/img/head/head10.png' ? 'checked' : '' }} value="frontend/img/head/head10.png" id="head10" name="headPortrait">
                    <label class="form-check-label" for="head10">
                        <img src="{{ asset('frontend') }}/img/head/head10.png" alt="" class="userImage">
                    </label>
                </div>
            </div>

            <div class="col-4 text-center mb-3 mb-md-5">
                <div class="userlabel">
                    <input class="form-check-input" type="checkbox" {{ auth()->user()->image == 'frontend/img/head/head11.png' ? 'checked' : '' }} value="frontend/img/head/head11.png" id="head11" name="headPortrait">
                    <label class="form-check-label" for="head11">
                        <img src="{{ asset('frontend') }}/img/head/head11.png" alt="" class="userImage">
                    </label>
                </div>
            </div>

            <div class="col-4 text-center mb-3 mb-md-5">
                <div class="userlabel">
                    <input class="form-check-input" type="checkbox" {{ auth()->user()->image == 'frontend/img/head/head12.png' ? 'checked' : '' }} value="frontend/img/head/head12.png" id="head12" name="headPortrait">
                    <label class="form-check-label" for="head12">
                        <img src="{{ asset('frontend') }}/img/head/head12.png" alt="" class="userImage">
                    </label>
                </div>
            </div>
        </div>
        <div class="text-center py-3">
            <button class="submit-btn" type="submit">Submit</button>
        </div>
    </div>
</form>

@endsection
@section('scripts')
    <script>
        $('input[type="checkbox"]').on('change', function() {
            $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        });
    </script>

@endsection
