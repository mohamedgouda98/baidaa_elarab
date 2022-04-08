@extends('admin.layouts.master')

@section('title')
    Poet - Dashboard
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assetsAdmin/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetsAdmin/plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetsAdmin/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assetsAdmin/plugins/table/datatable/custom_dt_custom.css')}}">
@endsection

@section('content')
    <div id="content" class="main-content">
        <div class="container">
            <div class="layout-px-spacing">

                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{URL::current()}}">Poet</a></li>
                        </ol>
                    </nav>
                </div>

                <div class="row layout-top-spacing" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="seperator-header">
                            <h4 class="">Countries</h4>
                        </div>
                        <div class="seperator-header text-right">
                            <a href="{{route('admin.poet.create')}}"><h4 class="">Add New Poet</h4></a>
                        </div>

                        <div class="row layout-spacing">
                            <div class="col-lg-12">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-content widget-content-area">
                                        <table id="style-1" class="table style-1 dt-table-hover non-hover">
                                            <thead>
                                            <tr>
                                                <th class="checkbox-column dt-no-sorting">#</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Birthday</th>
                                                <th>Title</th>
                                                <th>Info</th>
                                                <th>Country</th>
                                                <th class="text-center dt-no-sorting">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @isset($poets)
                                                @foreach($poets as $poet)
                                                    <tr>
                                                        <td class="checkbox-column"> {{$poet->id}} </td>
                                                        <td> {{$poet->id}} </td>
                                                        <td class="user-name">{{$poet->name}}</td>
                                                        <td class="user-name">{{$poet->birthday}}</td>
                                                        <td class="user-name">{{$poet->title}}</td>
                                                        <td class="user-name">{!! $poet->info !!}</td>
                                                        <td class="user-name">{{$poet->country->current_name}}</td>
                                                        <td class="text-center">
                                                            <div class="btn-group">
                                                                <button type="button"
                                                                        class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split"
                                                                        id="dropdownMenuReference25" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                                         class="feather feather-chevron-down">
                                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                                    </svg>
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference25">

                                                                    <a class="dropdown-item btn btn-sm"
                                                                       href="{{ route('admin.poet.edit', $poet) }}">Edit</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <form method="post" action="{{ route('admin.poet.destroy', $poet) }}">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button data-name="order"
                                                                                class="btn btn-danger dropdown-item mb-3"
                                                                                type="submit">Delete</button>
                                                                    </form>


                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>

@endsection

@section('js')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{URL::asset('assetsAdmin/plugins/table/datatable/datatables.js')}}"></script>
    <script>
        c1 = $('#style-1').DataTable({
            headerCallback:function(e, a, t, n, s) {
                e.getElementsByTagName("th")[0].innerHTML='<label class="new-control new-checkbox checkbox-outline-primary m-auto">\n<input type="checkbox" class="new-control-input chk-parent select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
            },
            columnDefs:[ {
                targets:0, width:"30px", className:"", orderable:!1, render:function(e, a, t, n) {
                    return'<label class="new-control new-checkbox checkbox-outline-primary  m-auto">\n<input type="checkbox" class="new-control-input child-chk select-customers-info" id="customer-all-info">\n<span class="new-control-indicator"></span><span style="visibility:hidden">c</span>\n</label>'
                }
            }],
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5,
            "order": [[ 0 , "desc" ]]
        });

        multiCheck(c1);

    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection
