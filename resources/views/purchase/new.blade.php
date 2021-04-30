@extends('layout.base')
@section('style')
<link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/apple-touch-icon-152x152.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon-32x32.png')}}">


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/vendors.min.css')}}">
<!-- BEGIN: VENDOR CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/flag-icon/css/flag-icon.min.css')}}">
<!-- END: VENDOR CSS-->
<!-- BEGIN: Page Level CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themes/vertical-modern-menu-template/style.css')}}">



<!-- END: Page Level CSS-->
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/laravel-custom.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom/custom.css')}}">
<!-- END: Custom CSS-->
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
@endsection
@section('container')
<div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
    <!-- Search for small screen-->
    <div class="container">
        <div class="row">
            <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>New Purchase </span></h5>
                <ol class="breadcrumbs mb-0">
                    <li class="breadcrumb-item ">
                        <a href="modern.html">Home</a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a>Purchase Report</a>
                    </li>
                    <li class="breadcrumb-item ">
                        <a>New Purchase</a>
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
<div class="col s12 m12 l12">
    <div id="Form-advance" class="card card card-default scrollspy">
        <div class="card-content">
            <form>
                <div class="row">
                    <div class="input-field col m6 s12">
                        <input id="first_name01" type="date">
                        <label for="first_name01">Date</label>
                    </div>
                    <div class="input-field col m6 s12">

                        <select tabindex="-1">
                            <option value="" disabled="" selected="">Choose your profile</option>
                            <option value="1">Manager</option>
                            <option value="2">Developer</option>
                            <option value="3">Business</option>
                        </select>
                        <label>Select Vendors</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m3">
                        <select tabindex="-1">
                            <option value="" disabled="" selected=""></option>
                            <option value="1">Manager</option>
                            <option value="2">Developer</option>
                            <option value="3">Business</option>
                        </select>
                        <label>Item Name</label>
                    </div>
                    <div class="input-field col m1">
                        <input id="" type="number" name="grade" min="0">
                        <label for="email">Grade</label>
                    </div>
                    <div class="input-field col m1">
                        <input id="" type="number" name="kg" min="0">
                        <label for="email">Kg/Grade</label>
                    </div>
                    <div class="input-field col m1">
                        <input id="" type="number" min="0">
                        <label for="email">Kg/Bag</label>
                    </div>
                    <div class="input-field col m2">
                        <input id="" type="number" min="0">
                        <label for="email">Price</label>
                    </div>
                    <div class="input-field col m2">
                        <input id="" type="number" min="0">
                        <label for="email">Total</label>
                    </div>
                    <div class="input-field col m2">
                        <input id="" type="button" class="btn" value="Add" min="0">
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div id="responsive-table" class="card card card-default scrollspy">
                            <div class="card-content">
                                <h4 class="card-title right red-text">Previous Balance: ₹ 0000</h4>
                                <div class="row">
                                    <div class="col s12">
                                    </div>
                                    <div class="col s12">
                                        <table class="responsive-table">
                                            <thead>
                                                <tr>
                                                    <th>Item Name</th>
                                                    <th>Total KG</th>
                                                    <th>Item Price</th>
                                                    <th>Total Price</th>
                                                    <th class="center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Thakkali</td>
                                                    <td>12</td>
                                                    <td>₹ 1</td>
                                                    <td>₹ 12</td>
                                                    <td class="center">
                                                        <a href="#" class="red-text"><i
                                                                class="material-icons">delete</i></a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <br>
                                <div class="row pt-2">
                                    <div class="col m6 ">
                                        <div class="row ">
                                            <div class="col m5 s8 right-align ">Opening Grade :</div>
                                            <div class="col m1 s4 right-align">10</div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col m5 s8 right-align">Purchase Grade :</div>
                                            <div class="col m1  s4  right-align">25</div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col m5 s8 right-align pt-3">Grade Return:</div>
                                            <div class="col m2  s4 right-align"><input id="" type="number" min="0">
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col m5 s8 right-align ">Remaining Grade :</div>
                                            <div class="col m1 s4 right-align">7</div>
                                        </div>
                                    </div>
                                    <div class="col m6">
                                        <div class="row ">
                                            <div class="col m9 s8 right-align ">Opening Balance :</div>
                                            <div class="col m3 s4 right-align">500</div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col m9 s8 right-align">Purchase Price :</div>
                                            <div class="col m3  s4  right-align">10000</div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col m9 s8 right-align pt-3">Cash:</div>
                                            <div class="col m3  s4 right-align"><input id="" class="right-align"
                                                    type="number" min="0"></div>
                                        </div>
                                        <div class="row pt-2">
                                            <div class="col m9 s8 right-align">Balance :</div>
                                            <div class="col m3 s4 right-align">10000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('js')
<!-- BEGIN VENDOR JS-->
<script src="{{ asset('assets/js/vendors.min.js')}}"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="{{ asset('assets/js/plugins.js')}}"></script>
<script src="{{ asset('assets/js/search.js')}}"></script>
<script src="{{ asset('assets/js/custom/custom-script.js')}}"></script>
<script src="{{ asset('assets/js/scripts/customizer.js')}}"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->
@endsection
