<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--=====================================
                CSS LINK PART START
    =======================================-->
    @include('admin.layouts.head')
    <!--=====================================
                CSS LINK PART END
    =======================================-->
</head>

<!--=====================================
        HEADER PART START
=======================================-->
@include('admin.layouts.header')
<!--=====================================
            HEADER PART END
=======================================-->
<body class="@yield('bodyClass')">
<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

@yield('content')
<!--=====================================
            JS LINK PART START
=======================================-->
@include('admin.layouts.footer-js')
<!--=====================================
            JS LINK PART END
=======================================-->
</body>

</html>
