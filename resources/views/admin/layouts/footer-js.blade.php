<!--=====================================
            JS LINK PART START
=======================================-->
<!-- Global -->
<script src="{{ URL::asset('assetsAdmin/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ URL::asset('assetsAdmin/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ URL::asset('assetsAdmin/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assetsAdmin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ URL::asset('assetsAdmin/assets/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<!-- CUSTOM -->
@yield('js')
<script src="{{ URL::asset('assetsAdmin/assets/js/custom.js') }}"></script>
<script src="{{ URL::asset('assetsAdmin/assets/js/loader.js') }}"></script>
<script src="{{ URL::asset('assetsAdmin/shard/custom.js') }}"></script>



<!-- Sweet Alert -->
@include('sweetalert::alert')
<!--=====================================
            JS LINK PART END
=======================================-->
