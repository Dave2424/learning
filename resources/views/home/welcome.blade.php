<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/logo-fav.png">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/lib/material-design-icons/css/material-design-iconic-font.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" type="text/css"/>
  </head>
  <body>
    <div class="be-wrapper be-fixed-sidebar">
        @include('inc.navbar')
        @include('inc.sidebar')
        <div class="be-content">
          @yield('content')
        </div>
        @include('inc.right-sidebar')

    </div>
    <script src="{{asset('assets/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/jquery-flot/jquery.flot.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/jquery-flot/jquery.flot.pie.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/jquery-flot/jquery.flot.time.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/jquery-flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/jquery-flot/plugins/curvedLines.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/jquery-flot/plugins/jquery.flot.tooltip.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/jquery.sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/countup/countUp.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/lib/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    {{-- <script src="{{asset('assets/lib/jqvmap/jquery.vmap.min.js')}}" type="text/javascript"></script> --}}
    {{-- <script src="{{asset('assets/lib/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script> --}}
    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      	// App.dashboard();
      
      });
    </script>
    @stack('scripts')
  </body>
</html>