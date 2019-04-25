<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="SOFTWARE RESEARCH AND DEVELOPMENT CENTER | SMK TELKOM DARUL ULUM JOMBANG">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/android-chrome-512x512.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png')}}">
    <meta name="msapplication-TileColor" content="#5098e1">
    {{-- <link rel="shortcut icon" href="{{ asset('img/logo2.png')}}"> --}}
    <title>ADMIN | SMK TELKOM DU</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/material-design-icons/css/material-design-iconic-font.min.css')}}"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/jqvmap/jqvmap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/jquery.magnific-popup/magnific-popup.css')}}"/>
</head>
<body>
        <div class="be-wrapper be-fixed-sidebar">
               
   @include('layouts.header')
   
   @include('layouts.sidebar')
   
   <div class="be-content">
        <div class="main-content container-fluid">
               @yield('content')
        </div>
       
      </div>
    <script src="{{ asset('assets/lib/jquery/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/main.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/jquery.flot.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/jquery.flot.pie.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-flot/plugins/curvedLines.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery.sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/countup/countUp.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jqvmap/jquery.vmap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app-dashboard.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/daterangepicker/js/daterangepicker.js')}}" type="text/javascript"></script>
    <script src="{{ asset("assets/lib/jquery.magnific-popup/jquery.magnific-popup.min.js")}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/masonry/masonry.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app-page-gallery.js')}}" type="text/javascript"></script>
    <script src="{{ asset('assets/lib/jquery.niftymodals/dist/jquery.niftymodals.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.formElements();
      });
    </script>
    
</body>
</html>