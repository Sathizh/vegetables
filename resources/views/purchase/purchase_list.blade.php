@extends('layout.base')
@section("style")


<link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/apple-touch-icon-152x152.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon-32x32.png')}}">


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/vendors.min.css')}}">
<!-- BEGIN: VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.html')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/data-tables/css/select.dataTables.min.css')}}">
<!-- END: VENDOR CSS-->
<!-- BEGIN: Page Level CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/vertical-modern-menu-template/style.css')}}">


<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages/data-tables.css')}}">

<!-- END: Page Level CSS-->
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/laravel-custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom/custom.css')}}">
<!-- END: Custom CSS-->
@endsection

@section("container")
<div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
    <!-- Search for small screen-->
    <div class="container">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Purchase Details </span></h5>
                <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item ">
                        <a href="modern.html">Home</a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a>Purchase Report</a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a>30/04/2021</a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a class="waves-light breadcrumbs-btn right" href="#">
                            <i class="material-icons">print</i>
                        </a>
                    </li>
                </ol>
            </div>
            <div class="col s2 m6 l6">

                <a class="btn dropdown-settings   waves-light breadcrumbs-btn right" href="/new_purchse">
                    <i class="material-icons hide-on-med-and-up">add</i>
                    <span class="hide-on-small-onl">New Purchase</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col s12">
    <div class="container">
        <div class="section section-data-tables">
            <!-- Page Length Options -->
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <h4 class="card-title">Page Length Options</h4>
                            <div class="row">
                                <div class="col s12">
                                    <table id="" class="display">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Entry By</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <td>1</td>
                                            <td>Sample</td>
                                            <td>30000</td>
                                            <td>Sample</td>
                                            <td>
                                                <a href="#" class="green-text"><i
                                                        class="material-icons">visibility</i></a>
                                                <a href="#" class=""><i class="material-icons">edit</i></a>
                                                <a href="#" class="red-text"><i class="material-icons">delete</i></a>
                                            </td>
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

    <div class="content-overlay"></div>
</div>
@endsection

@section("js")
<!-- BEGIN VENDOR JS-->
<script src="{{ asset('assets/js/vendors.min.js')}}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{ asset('assets/vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.html')}}"></script>
<script src="{{ asset('assets/vendors/data-tables/js/dataTables.select.min.js')}}"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{ asset('assets/js/plugins.js')}}"></script>
<script src="{{ asset('assets/js/search.js')}}"></script>
<script src="{{ asset('assets/js/custom/custom-script.js')}}"></script>
<script src="{{ asset('assets/js/scripts/customizer.js')}}"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{ asset('assets/js/scripts/data-tables.js')}}"></script>
@endsection
