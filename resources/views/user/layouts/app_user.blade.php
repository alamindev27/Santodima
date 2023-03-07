@php
    $setting = DB::table('settings')->find(1);
@endphp
@include('user.partials.header')
@yield('content')
@include('user.partials.footer_nav')
@include('user.partials.footer')
