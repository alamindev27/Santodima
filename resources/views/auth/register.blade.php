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

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <h1>Sign Up Form</h1>
                    @if (!empty($_GET['referCode']))
                        <input type="hidden" name="referCode" value="{{ $_GET['referCode'] }}">
                    @endif
                    <div>
                        <input value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required="" name="name" value="{{ old('name') }}"/>
                        <span class="text-danger mb-3 float-left">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mt-4">
                        <input value="{{ old('email') }}" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" required="" name="email" value="{{ old('email') }}"/>
                        <span class="text-danger mb-3 float-left">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </span>

                    <div class="mt-4">
                        <input value="{{ old('phone') }}" type="number" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone number" required="" name="phone" value="{{ old('phone') }}"/>
                        <span class="text-danger mb-3 float-left">
                            @error('phone')
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
                            @error('password_confirmation')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div>
                        <button class="btn btn-success" type="submit">Sign Up</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />
                        Already have an account <a href="{{ route('login') }}">Sign Up</a>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection

