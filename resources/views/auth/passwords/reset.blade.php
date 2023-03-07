@extends('auth.layouts.auth_form')
@section('form')
<style>
    .login_content form input[type="text"], .login_content form input[type="email"], .login_content form input[type="password"] {
        margin: 0 0 3px;
    }
</style>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <h1>Reset Password</h1>
                    <div>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" placeholder="E-mail" required="" name="email"/>
                        <span class="text-danger mb-3 float-left">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mt-4">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" required="" name="password"/>
                        <span class="text-danger mb-3 float-left">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                     <div class="mt-4">
                        <input type="password" class="form-control  @error('password_confirmation') is-invalid @enderror" placeholder="Re-type Password" required="" name="password_confirmation"/>
                        <span class="text-danger mb-3 float-left">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div>
                        <button class="btn btn-default" type="submit">Log in</button>
                        <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            @php
                                $setting = DB::table('settings')->find(1);
                            @endphp
                            <img src="{{ asset($setting->logo) }}" alt="">
                            <p>{{ $setting->copyright_text }}</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection
