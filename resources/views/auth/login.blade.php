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
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <h1>Login Form</h1>
                    <div>
                        <input value="admin@gmail.com" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" required="" name="email" value="{{ old('email') }}"/>
                        <span class="text-danger mb-3 float-left">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mt-4">
                        <input value="admin@gmail.com" type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Password" required="" name="password"/>
                        <span class="text-danger mb-3 float-left">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div>
                        <button class="btn btn-success" type="submit">Log in</button>
                        <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />
                        Don't have an account <a href="{{ route('register') }}">Sign Up</a>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection
