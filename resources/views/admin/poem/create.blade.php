@extends('admin.layouts.master')

@section('title')
   Add New Poem - Dashboard
@endsection

@section('css')
    <link href="{{asset('assetsAdmin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assetsAdmin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assetsAdmin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assetsAdmin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
    <!---BEGIN CUSTOM STYLE FILE--->
    <link href="{{asset('assetsAdmin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('assetsAdmin/plugins/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assetsAdmin/plugins/editors/markdown/simplemde.min.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
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
                            <li class="breadcrumb-item"><a href="{{route('admin.poem.index')}}">Poems</a></li>&nbsp;
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{URL::current()}}">Add New Poem</a></li>
                        </ol>
                    </nav>

                </div>

                <div class="container">
                    <div class="row my-5 mx-auto">
                        <div class="col-lg-12 layout-spacing">
                            <form action="{{route('admin.poem.store')}}" method="post">
                                @csrf
                                <div id="fuMultipleFile" class="col-lg-12 layout-spacing">

                                    <div class="form-group mb-4">
                                        <label class="control-label">Title:</label>
                                        <input type="text" name="title" class="form-control @error('title') is-invalid fparsley-error parsley-error @enderror" placeholder="Enter Your Title " value="{{old('title')}}" required>
                                        @error('title')
                                            <span class="invalid-feedback text-danger" role="alert">
                                              <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="control-label">Body:</label>
                                        <textarea name="body" class="form-control @error('body') is-invalid fparsley-error parsley-error @enderror" placeholder="Enter Body " required>{{old('body')}}</textarea>
                                        @error('body')
                                        <span class="invalid-feedback text-danger" role="alert">
                                              <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label>Description</label>
                                            <textarea name="description" class=" @error('description') is-invalid fparsley-error parsley-error @enderror" id="editor">{{ old('description') }}</textarea>
                                            @error('description')
                                            <span class="invalid-feedback text-danger" role="alert">
                                           <p>{{ $message }}</p>
                                        </span>
                                            @enderror

                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="control-label">Verses count:</label>
                                        <input type="text" name="verses_count" class="form-control @error('verses_count') is-invalid fparsley-error parsley-error @enderror" placeholder="Enter Your Verses Count " value="{{old('verses_count')}}" required>
                                        @error('verses_count')
                                        <span class="invalid-feedback text-danger" role="alert">
                                              <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="control-label">Poet:</label>
                                        <select name="poet" class="form-control @error('poet') is-invalid fparsley-error parsley-error @enderror" required>
                                            <option>Select Poet</option>
                                            @isset($poets)
                                                @foreach($poets as $poet)
                                                    <option value="{{ $poet->id }}">{{ $poet->name }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                        @error('poet')
                                        <span class="invalid-feedback text-danger" role="alert">
                                              <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group mb-4">
                                        <label class="control-label">Poetic Type:</label>
                                        <select name="poetic_type" class="form-control @error('poetic_type') is-invalid fparsley-error parsley-error @enderror" required>
                                            <option>Select Poetic Type</option>
                                            @isset($poeticTypes)
                                                @foreach($poeticTypes as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            @endisset
                                        </select>
                                        @error('poetic_type')
                                        <span class="invalid-feedback text-danger" role="alert">
                                              <p>{{ $message }}</p>
                                            </span>
                                        @enderror
                                    </div>

                                </div>


                                <input type="submit" value="Create" class="btn btn-primary ml-3 mt-3">
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
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    <!-- END PAGE LEVEL PLUGINS -->

@endsection

