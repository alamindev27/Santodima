<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $setting->site_name }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugin/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugin/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugin/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugin/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">

    @yield('styles')
</head>
<body>
