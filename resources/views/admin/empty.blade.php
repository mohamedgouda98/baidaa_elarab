@extends('admin.layouts.master')

@section('title')
{{__("dashboard.Departments")}} - {{__("dashboard.Dashboard")}}
@endsection


@section('content')
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">

                <div class="page-header">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">{{__("dashboard.Tables")}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">{{__("dashboard.Basic")}}</a></li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
@endsection


