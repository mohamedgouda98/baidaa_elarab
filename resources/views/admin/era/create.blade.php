@extends('admin.layouts.master')

@section('title')
   Add New Era - Dashboard
@endsection

@section('css')
    <link href="{{asset('assetsAdmin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assetsAdmin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assetsAdmin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assetsAdmin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
    <!---BEGIN CUSTOM STYLE FILE--->
    <link href="{{asset('assetsAdmin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('assetsAdmin/plugins/select2/select2.min.css')}}">
    <!--  END CUSTOM STYLE FILE  -->
@endsection

@section('content')
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">

                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.era.index')}}">Eras</a></li>&nbsp;
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{URL::current()}}">Add New Era</a></li>
                        </ol>
                    </nav>

                </div>

                <div class="container">
                    <div class="row my-5 mx-auto">
                        <div class="col-lg-12 layout-spacing">
                            <form action="{{route('admin.era.store')}}" method="post">
                                @csrf

                                <div id="fuMultipleFile" class="col-lg-12 layout-spacing">

                                    

                                    <div class="form-group mb-4">
                                        <label class="control-label"> Name:</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid fparsley-error parsley-error @enderror" placeholder="Enter Era Name " value="{{old('name')}}">
                                        @error('name')
                                        <span class="invalid-feedback text-danger" role="alert">
                                              <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>

                                </div>


                                <input type="submit" value="store" class="btn btn-primary ml-3 mt-3">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{URL::asset('assetsAdmin/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{URL::asset('assetsAdmin/plugins/select2/select2.min.js')}}"></script>
    <script src="{{URL::asset('assetsAdmin/plugins/select2/custom-select2.js')}}"></script>
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->

    <script src="{{URL::asset('assetsAdmin/plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{URL::asset('assetsAdmin/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{URL::asset('assetsAdmin/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{URL::asset('assetsAdmin/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>

    <script>

        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    <!-- END PAGE LEVEL PLUGINS -->
@endsection

