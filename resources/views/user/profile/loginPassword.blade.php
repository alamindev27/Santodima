@extends('user.layouts.app_user')
@section('content')
<section class="headerTop2">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center py-3">
                <a href="{{ route('user.profile.personalInfo') }}" class="text-dark" style="position: absolute; left: 15px;">
                    <i class="fa fa-angle-left fs-5 fw-light"></i>
                </a>
                <p class="fw-bold m-0 fs-5">Change login password</p>
            </div>
        </div>
    </div>
</section>



<section class="page-content-2 " style="height: 100vh;">
    <form action="{{ route('user.change.password') }}" method="POST">
        @csrf
        <div class="container-fluid ">
            <div class="row">
                <div class="col-12" style="margin-top: 100px;">
                    <div class="bg-white info-area p-1 p-md-3 bankForm">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('oldPassNotMatch'))
                            <div class="alert alert-danger">
                                {{ session('oldPassNotMatch') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table">
                            <tr class="py-3">
                                <td width="20">
                                    <p class="mb-0 me-0 me-md-5">Current Password</p>
                                </td>
                                <td>
                                    <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" placeholder="Please enter original login password">
                                </td>
                            </tr>

                            <tr class="py-3">
                                <td width="20">
                                    <p class="mb-0 me-0 me-md-5">New Password</p>
                                </td>
                                <td>
                                    <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" placeholder="Please enter new login password">
                                </td>
                            </tr>


                            <tr class="py-3">
                                <td width="20">
                                    <p class="mb-0 me-0 me-md-5">Re-type Password</p>
                                </td>
                                <td>
                                    <input type="password" name="re_type_password" class="form-control @error('re_type_password') is-invalid @enderror" placeholder="Please enter confirm new login password">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <p class="my-4">Tips: If you forget your password, please contact customer service</p>

            <div class="text-center py-3">
                <button type="submit" class="submit-btn">Submit</button>
            </div>
        </div>
    </form>
    <br><br><br><br><br><br><br>
</section>

@endsection
