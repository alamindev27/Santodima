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
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <h1>Reset Pssword</h1>
                    <div>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="E-mail" required="" name="email"/>
                        <span class="text-danger mb-3 float-left">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div>
                        <button class="btn btn-default" type="submit">Send Password Reset Link</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
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
