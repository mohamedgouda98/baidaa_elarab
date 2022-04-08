@extends('admin.layouts.master')

@section('title')
{{__("dashboard.Departments")}} - {{__("dashboard.Dashboard")}}
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::asset('assetsAdmin/' . LaravelLocalization::getCurrentLocale() . '/plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assetsAdmin/' . LaravelLocalization::getCurrentLocale() . '/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assetsAdmin/' . LaravelLocalization::getCurrentLocale() . '/assets/css/forms/theme-checkbox-radio.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assetsAdmin/' . LaravelLocalization::getCurrentLocale() . '/plugins/table/datatable/custom_dt_custom.css')}}">
@endsection

@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="layout-px-spacing">

            <div class="page-header">
                <nav class="breadcrumb-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">{{__("dashboard.Home")}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{URL::current()}}">{{__("dashboard.Login")}}</a></li>
                    </ol>
                </nav>
            </div>

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="seperator-header">
                        <h4 class="">Style 2</h4>
                    </div>

                    <div class="seperator-header text-right">
                        <h4 class="">Add New Department</h4>
                    </div>

                    <div class="row layout-spacing">
                        <div class="col-lg-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <table id="style-1" class="table style-1 dt-table-hover non-hover">
                                        <thead>
                                        <tr>
                                            <th class="checkbox-column dt-no-sorting"> Record no. </th>
                                            <th>Name</th>
                                            <th>Customers</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th class="">Status</th>
                                            <th class="text-center dt-no-sorting">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="checkbox-column"> 1 </td>
                                            <td class="user-name">Sean Freeman</td>
                                            <td class="">
                                                <a class="profile-img" href="javascript: void(0);">
                                                    <img src="assets/img/90x90.jpg" alt="product">
                                                </a>
                                            </td>
                                            <td>seanfreeman@admin.com</td>
                                            <td>555-555-5555</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                    <span class="label label-success">Approved</span>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 2 </td>
                                            <td class="user-name">Donna Rogers</td>
                                            <td class="">
                                                <a class="profile-img" href="javascript: void(0);">
                                                    <img src="assets/img/90x90.jpg" alt="product">
                                                </a>
                                            </td>
                                            <td>donnarogers@user.com</td>
                                            <td>555-555-6666</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class=" align-self-center d-m-warning  mr-1 data-marker"></div>
                                                    <span class="label label-warning">Suspended</span>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 3 </td>
                                            <td class="user-name">Irene Collins</td>
                                            <td class="">
                                                <a class="profile-img" href="javascript: void(0);">
                                                    <img src="assets/img/90x90.jpg" alt="product">
                                                </a>
                                            </td>
                                            <td>irene@superadmin.com</td>
                                            <td>777-555-5555</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class=" align-self-center d-m-danger  mr-1 data-marker"></div>
                                                    <span class="label label-danger">Closed</span>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 4 </td>
                                            <td class="user-name">Vincent Carpenter</td>
                                            <td class="">
                                                <a class="profile-img" href="javascript: void(0);">
                                                    <img src="assets/img/90x90.jpg" alt="product">
                                                </a>
                                            </td>
                                            <td>vincentC@admin.com</td>
                                            <td>555-666-5555</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                    <span class="label label-success">Approved</span>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink4">
                                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 5 </td>
                                            <td class="user-name">Susan Phillips</td>
                                            <td class="">
                                                <a class="profile-img" href="javascript: void(0);">
                                                    <img src="assets/img/90x90.jpg" alt="product">
                                                </a>
                                            </td>
                                            <td>susan@yahoo.com</td>
                                            <td>444-444-4444</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class=" align-self-center d-m-warning  mr-1 data-marker"></div>
                                                    <span class="label label-warning">Suspended</span>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink5">
                                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 6 </td>
                                            <td class="user-name">Alexander Gray</td>
                                            <td class="">
                                                <a class="profile-img" href="javascript: void(0);">
                                                    <img src="assets/img/90x90.jpg" alt="product">
                                                </a>
                                            </td>
                                            <td>alexander@gmail.com</td>
                                            <td>111-111-1111</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class=" align-self-center d-m-danger  mr-1 data-marker"></div>
                                                    <span class="label label-danger">Closed</span>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink6">
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="checkbox-column"> 7 </td>
                                            <td class="user-name">Judy Holmes</td>
                                            <td class="">
                                                <a class="profile-img" href="javascript: void(0);">
                                                    <img src="assets/img/90x90.jpg" alt="product">
                                                </a>
                                            </td>
                                            <td>judy@customer.com</td>
                                            <td>111-666-1111</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class=" align-self-center d-m-success  mr-1 data-marker"></div>
                                                    <span class="label label-success">Approved</span>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink7">
                                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">View Response</a>
                                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
<script src="{{URL::asset('assetsAdmin/' . LaravelLocalization::getCurrentLocale() . '/plugins/table/datatable/datatables.js')}}"></script>
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
        "pageLength": 5
    });

    multiCheck(c1);

</script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
