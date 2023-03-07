
<!DOCTYPE html>
<html lang="en">
  <head>
    @php
        $setting = DB::table('settings')->find(1);
    @endphp

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="{{ asset('backend') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('backend') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('backend') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('backend') }}/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('backend') }}/build/css/custom.min.css" rel="stylesheet">
    <script src="{{ asset('backend') }}/vendors/jquery/dist/jquery.min.js"></script>
    @yield('styles')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('admin.index') }}" class="site_title">
                    {{-- <img src="{{ asset($setting->logo) }}" alt="" width="80">
                    <span>{{ $setting->site_name }} </span> --}}
            </a>
            </div>

            <div class="clearfix"></div>

            @include('admin.partials.sidebar')

          </div>
        </div>

        @include('admin.partials.top-nav')

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>



    <!-- jQuery -->
    {{-- <script src="{{ asset('backend') }}/vendors/jquery/dist/jquery.min.js"></script> --}}
    <!-- Bootstrap -->
   <script src="{{ asset('backend') }}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{ asset('backend') }}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{ asset('backend') }}/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('backend') }}/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="{{ asset('backend') }}/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="{{ asset('backend') }}/vendors/google-code-prettify/src/prettify.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('backend') }}/build/js/custom.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @yield('scripts')
  </body>
</html>
