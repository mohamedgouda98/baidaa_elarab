<!-- FOR WEBPAGE TITLE -->
<title>@yield('title') </title>
<link rel="icon" type="image/x-icon" href="{{URL::asset('assetsAdmin/assets/img/favicon.ico')}}"/>
<link href="{{URL::asset('assetsAdmin/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
<script src="{{URL::asset('assetsAdmin/assets/js/loader.js')}}"></script>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
<link href="{{URL::asset('assetsAdmin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::asset('assetsAdmin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{URL::asset('assetsAdmin/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('assetsAdmin/assets/css/dashboard/dash_2.css')}}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<!-- Custom -->
@yield('css')
<!--=====================================
            CSS LINK PART END
=======================================-->
