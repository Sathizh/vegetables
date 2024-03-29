<!DOCTYPE html>
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="MlGnQBu4oQmhPftViLi3I5xIohjXm7FwgjL8Vpkk">

    <title>Dashboard Modern | Materialize - Material Design Admin Template</title>

    @yield("style")

</head>
<!-- END: Head-->


<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  "
    data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed ">
            <nav
                class="navbar-main navbar-color nav-collapsible no-shadow nav-expanded sideNav-lock  navbar-dark gradient-45deg-indigo-purple ">
                <div class="nav-wrapper">

                    <ul class="navbar-list right">
                        <li class="hide-on-med-and-down">
                            <a class="  waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                                <i class="material-icons">settings_overscan</i>
                            </a>
                        </li>
                        <li class="hide-on-large-only search-input-wrapper">
                            <a class="  waves-block waves-light search-button" href="javascript:void(0);">
                                <i class="material-icons">search</i>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-target="theme-cutomizer-out"
                                class="accent-2 white-text sidenav-trigger theme-cutomizer-trigger">
                                <i class="material-icons">settings</i></a>
                        </li>
                        <li>
                            <a class="  waves-block waves-light profile-button" href="javascript:void(0);"
                                data-target="profile-dropdown">
                                <span class="avatar-status avatar-online">
                                    <img src="{{ asset('assets/images/avatar/avatar-7.png') }}" alt="avatar"><i></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li>
                            <a class="grey-text text-darken-1" href="user-login.html">
                                <i class="material-icons">keyboard_tab</i>
                                Logout
                            </a>
                        </li>

                    </ul>
                </div>
                <nav class="display-none search-sm">
                    <div class="nav-wrapper">
                        <form id="navbarForm">
                            <div class="input-field search-input-sm">
                                <input class="search-box-sm mb-0" type="search" required=""
                                    placeholder='Explore Materialize' id="search" data-search="template-list">
                                <label class="label-icon" for="search">
                                    <i class="material-icons search-sm-icon">search</i>
                                </label>
                                <i class="material-icons search-sm-close">close</i>
                                <ul class="search-list collection search-list-sm display-none"></ul>
                            </div>
                        </form>
                    </div>
                </nav>
            </nav>
        </div>
        <!-- search ul  -->
        <ul class="display-none" id="default-search-main">
            <li class="auto-suggestion-title">
                <a class="collection-item" href="#">
                    <h6 class="search-title">FILES</h6>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center flex-grow-1">
                            <div class="avatar">
                                <img src="{{ asset('assets/images/icon/pdf-image.png') }}" width="24" height="30"
                                    alt="sample image">
                            </div>
                            <div class="member-info display-flex flex-column">
                                <span class="black-text">
                                    Two new item submitted</span>
                                <small class="grey-text">Marketing Manager</small>
                            </div>
                        </div>
                        <div class="status"><small class="grey-text">17kb</small></div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center flex-grow-1">
                            <div class="avatar">
                                <img src="{{ asset('assets/images/icon/doc-image.png') }}" width="24" height="30"
                                    alt="sample image">
                            </div>
                            <div class="member-info display-flex flex-column">
                                <span class="black-text">52 Doc file Generator</span>
                                <small class="grey-text">FontEnd Developer</small>
                            </div>
                        </div>
                        <div class="status"><small class="grey-text">550kb</small></div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center flex-grow-1">
                            <div class="avatar">
                                <img src="{{ asset('assets/images/icon/xls-image.png') }}" width="24" height="30"
                                    alt="sample image">
                            </div>
                            <div class="member-info display-flex flex-column">
                                <span class="black-text">25 Xls File Uploaded</span>
                                <small class="grey-text">Digital Marketing Manager</small>
                            </div>
                        </div>
                        <div class="status"><small class="grey-text">20kb</small></div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center flex-grow-1">
                            <div class="avatar">
                                <img src="{{ asset('assets/images/icon/jpg-image.png') }}" width="24" height="30"
                                    alt="sample image">
                            </div>
                            <div class="member-info display-flex flex-column">
                                <span class="black-text">Anna Strong</span>
                                <small class="grey-text">Web Designer</small>
                            </div>
                        </div>
                        <div class="status"><small class="grey-text">37kb</small></div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion-title">
                <a class="collection-item" href="#">
                    <h6 class="search-title">MEMBERS</h6>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center flex-grow-1">
                            <div class="avatar">
                                <img class="circle" src="{{ asset('assets/images/avatar/avatar-7.png') }}" width="30"
                                    alt="sample image">
                            </div>
                            <div class="member-info display-flex flex-column">
                                <span class="black-text">John Doe</span>
                                <small class="grey-text">UI designer</small>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center flex-grow-1">
                            <div class="avatar">
                                <img class="circle" src="{{ asset('assets/images/avatar/avatar-8.png') }}" width="30"
                                    alt="sample image">
                            </div>
                            <div class="member-info display-flex flex-column">
                                <span class="black-text">Michal Clark</span>
                                <small class="grey-text">FontEnd Developer</small>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center flex-grow-1">
                            <div class="avatar">
                                <img class="circle" src="{{ asset('assets/images/avatar/avatar-10.png') }}" width="30"
                                    alt="sample image">
                            </div>
                            <div class="member-info display-flex flex-column">
                                <span class="black-text">Milena Gibson</span>
                                <small class="grey-text">Digital Marketing</small>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="auto-suggestion">
                <a class="collection-item" href="#">
                    <div class="display-flex">
                        <div class="display-flex align-item-center flex-grow-1">
                            <div class="avatar">
                                <img class="circle" src="{{ asset('assets/images/avatar/avatar-12.png') }}" width="30"
                                    alt="sample image">
                            </div>
                            <div class="member-info display-flex flex-column">
                                <span class="black-text">Anna Strong</span>
                                <small class="grey-text">Web Designer</small>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <ul class="display-none" id="page-search-title">
            <li class="auto-suggestion-title">
                <a class="collection-item" href="#">
                    <h6 class="search-title">PAGES</h6>
                </a>
            </li>
        </ul>
        <ul class="display-none" id="search-not-found">
            <li class="auto-suggestion">
                <a class="collection-item display-flex align-items-center" href="#">
                    <span class="material-icons">error_outline</span>
                    <span class="member-info">No results found.</span>
                </a>
            </li>
        </ul>
    </header>
    <!-- END: Header-->

    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible  sidenav-active-square  sidenav-light">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper">
                <a class="brand-logo darken-1" href="index.html">
                    <img class="hide-on-med-and-down" src="{{ asset('assets/images/logo/materialize-logo-color.png') }}"
                        alt="materialize logo" />
                    <img class="show-on-medium-and-down hide-on-med-and-up"
                        src="{{ asset('assets/images/logo/materialize-logo.png') }}" alt="materialize logo" />

                    <span class="logo-text hide-on-med-and-down">
                        CK Vegetables
                    </span>
                </a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
            data-menu="menu-navigation" data-collapsible="menu-accordion">

            <li class="bold ">
                <a class="   waves-cyan " href="javascript:void(0) ">
                    <i class="material-icons">settings_input_svideo</i>
                    <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>
            <li class="navigation-header">
                <a class="navigation-header-text">Entry</a>
                <i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold ">
                <a class="  waves-cyan active" href="/purchase">
                    <i class="material-icons">add_shopping_cart_outline</i>
                    <span class="menu-title" data-i18n="Mail">Purchase</span>
                </a>
            </li>
            <li class="bold ">
                <a class="  waves-cyan " href="/sales">
                    <i class="material-icons">attach_money_outline</i>
                    <span class="menu-title" data-i18n="Chat">Sales</span>
                </a>
            </li>

            <li class="navigation-header">
                <a class="navigation-header-text">Report </a>
                <i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold ">
                <a class="  waves-cyan " href="user-profile-page.html">
                    <i class="material-icons">person_outline</i>
                    <span class="menu-title" data-i18n="User Profile">Customer Report</span>
                </a>
            </li>
            <li class="bold ">
                <a class="  waves-cyan " href="user-profile-page.html">
                    <i class="material-icons">person_outline</i>
                    <span class="menu-title" data-i18n="User Profile">Vendor Report</span>
                </a>
            </li>
            <li class="bold ">
                <a class="  waves-cyan " href="user-profile-page.html">
                    <i class="material-icons">inbox_outline</i>
                    <span class="menu-title" data-i18n="User Profile">Box Report</span>
                </a>
            </li>
            <li class="bold ">
                <a class="  waves-cyan " href="user-profile-page.html">
                    <i class="material-icons">table_chart_outline</i>
                    <span class="menu-title" data-i18n="User Profile">Custom Report</span>
                </a>
            </li>

            <li class="navigation-header">
                <a class="navigation-header-text">Users </a>
                <i class="navigation-header-icon material-icons">more_horiz</i>
            </li>
            <li class="bold ">
                <a class="  waves-cyan " href="table-basic.html">
                    <i class="material-icons">person_add</i>
                    <span class="menu-title" data-i18n="Basic Tables">Add User</span>
                </a>
            </li>

        </ul>
        <div class="navigation-background"></div>
        <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium   waves-light hide-on-large-only" href="#"
            data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside> <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">

            <div class="content-wrapper-before  gradient-45deg-indigo-purple ">
            </div>


            @yield("container")
        </div>
    </div>
    <!-- END: Page Main-->



    <div id="theme-cutomizer-out" class="theme-cutomizer sidenav row">
        <div class="col s12">
            <a class="sidenav-close" href="#!"><i class="material-icons">close</i></a>
            <h5 class="theme-cutomizer-title">Theme Customizer</h5>
            <p class="medium-small">Customize & Preview in Real Time</p>
            <div class="menu-options">
                <h6 class="mt-6">Menu Options</h6>
                <hr class="customize-devider" />
                <div class="menu-options-form row">
                    <div class="input-field col s12 menu-color mb-0">
                        <p class="mt-0">Menu Color</p>
                        <div class="gradient-color center-align">
                            <span class="menu-color-option gradient-45deg-indigo-blue"
                                data-color="gradient-45deg-indigo-blue"></span>
                            <span class="menu-color-option gradient-45deg-purple-deep-orange"
                                data-color="gradient-45deg-purple-deep-orange"></span>
                            <span class="menu-color-option gradient-45deg-light-blue-cyan"
                                data-color="gradient-45deg-light-blue-cyan"></span>
                            <span class="menu-color-option gradient-45deg-purple-amber"
                                data-color="gradient-45deg-purple-amber"></span>
                            <span class="menu-color-option gradient-45deg-purple-deep-purple"
                                data-color="gradient-45deg-purple-deep-purple"></span>
                            <span class="menu-color-option gradient-45deg-deep-orange-orange"
                                data-color="gradient-45deg-deep-orange-orange"></span>
                            <span class="menu-color-option gradient-45deg-green-teal"
                                data-color="gradient-45deg-green-teal"></span>
                            <span class="menu-color-option gradient-45deg-indigo-light-blue"
                                data-color="gradient-45deg-indigo-light-blue"></span>
                            <span class="menu-color-option gradient-45deg-red-pink"
                                data-color="gradient-45deg-red-pink"></span>
                        </div>
                        <div class="solid-color center-align">
                            <span class="menu-color-option red" data-color="red"></span>
                            <span class="menu-color-option purple" data-color="purple"></span>
                            <span class="menu-color-option pink" data-color="pink"></span>
                            <span class="menu-color-option deep-purple" data-color="deep-purple"></span>
                            <span class="menu-color-option cyan" data-color="cyan"></span>
                            <span class="menu-color-option teal" data-color="teal"></span>
                            <span class="menu-color-option light-blue" data-color="light-blue"></span>
                            <span class="menu-color-option amber darken-3" data-color="amber darken-3"></span>
                            <span class="menu-color-option brown darken-2" data-color="brown darken-2"></span>
                        </div>
                    </div>
                    <div class="input-field col s12 menu-bg-color mb-0">
                        <p class="mt-0">Menu Background Color</p>
                        <div class="gradient-color center-align">
                            <span class="menu-bg-color-option gradient-45deg-indigo-blue"
                                data-color="gradient-45deg-indigo-blue"></span>
                            <span class="menu-bg-color-option gradient-45deg-purple-deep-orange"
                                data-color="gradient-45deg-purple-deep-orange"></span>
                            <span class="menu-bg-color-option gradient-45deg-light-blue-cyan"
                                data-color="gradient-45deg-light-blue-cyan"></span>
                            <span class="menu-bg-color-option gradient-45deg-purple-amber"
                                data-color="gradient-45deg-purple-amber"></span>
                            <span class="menu-bg-color-option gradient-45deg-purple-deep-purple"
                                data-color="gradient-45deg-purple-deep-purple"></span>
                            <span class="menu-bg-color-option gradient-45deg-deep-orange-orange"
                                data-color="gradient-45deg-deep-orange-orange"></span>
                            <span class="menu-bg-color-option gradient-45deg-green-teal"
                                data-color="gradient-45deg-green-teal"></span>
                            <span class="menu-bg-color-option gradient-45deg-indigo-light-blue"
                                data-color="gradient-45deg-indigo-light-blue"></span>
                            <span class="menu-bg-color-option gradient-45deg-red-pink"
                                data-color="gradient-45deg-red-pink"></span>
                        </div>
                        <div class="solid-color center-align">
                            <span class="menu-bg-color-option red" data-color="red"></span>
                            <span class="menu-bg-color-option purple" data-color="purple"></span>
                            <span class="menu-bg-color-option pink" data-color="pink"></span>
                            <span class="menu-bg-color-option deep-purple" data-color="deep-purple"></span>
                            <span class="menu-bg-color-option cyan" data-color="cyan"></span>
                            <span class="menu-bg-color-option teal" data-color="teal"></span>
                            <span class="menu-bg-color-option light-blue" data-color="light-blue"></span>
                            <span class="menu-bg-color-option amber darken-3" data-color="amber darken-3"></span>
                            <span class="menu-bg-color-option brown darken-2" data-color="brown darken-2"></span>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Menu Dark
                            <label class="float-right"><input class="menu-dark-checkbox" type="checkbox" /> <span
                                    class="lever ml-0"></span></label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            Menu Collapsed
                            <label class="float-right"><input class="menu-collapsed-checkbox" type="checkbox" /> <span
                                    class="lever ml-0"></span></label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="switch">
                            <p class="mt-0">Menu Selection</p>
                            <label>
                                <input class="menu-selection-radio with-gap" value="sidenav-active-square"
                                    name="menu-selection" type="radio" />
                                <span>Square</span>
                            </label>
                            <label>
                                <input class="menu-selection-radio with-gap" value="sidenav-active-rounded"
                                    name="menu-selection" type="radio" />
                                <span>Rounded</span>
                            </label>
                            <label>
                                <input class="menu-selection-radio with-gap" value="" name="menu-selection"
                                    type="radio" />
                                <span>Normal</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-6">Navbar Options</h6>
            <hr class="customize-devider" />
            <div class="navbar-options row">
                <div class="input-field col s12 navbar-color mb-0">
                    <p class="mt-0">Navbar Color</p>
                    <div class="gradient-color center-align">
                        <span class="navbar-color-option gradient-45deg-indigo-blue"
                            data-color="gradient-45deg-indigo-blue"></span>
                        <span class="navbar-color-option gradient-45deg-purple-deep-orange"
                            data-color="gradient-45deg-purple-deep-orange"></span>
                        <span class="navbar-color-option gradient-45deg-light-blue-cyan"
                            data-color="gradient-45deg-light-blue-cyan"></span>
                        <span class="navbar-color-option gradient-45deg-purple-amber"
                            data-color="gradient-45deg-purple-amber"></span>
                        <span class="navbar-color-option gradient-45deg-purple-deep-purple"
                            data-color="gradient-45deg-purple-deep-purple"></span>
                        <span class="navbar-color-option gradient-45deg-deep-orange-orange"
                            data-color="gradient-45deg-deep-orange-orange"></span>
                        <span class="navbar-color-option gradient-45deg-green-teal"
                            data-color="gradient-45deg-green-teal"></span>
                        <span class="navbar-color-option gradient-45deg-indigo-light-blue"
                            data-color="gradient-45deg-indigo-light-blue"></span>
                        <span class="navbar-color-option gradient-45deg-red-pink"
                            data-color="gradient-45deg-red-pink"></span>
                    </div>
                    <div class="solid-color center-align">
                        <span class="navbar-color-option red" data-color="red"></span>
                        <span class="navbar-color-option purple" data-color="purple"></span>
                        <span class="navbar-color-option pink" data-color="pink"></span>
                        <span class="navbar-color-option deep-purple" data-color="deep-purple"></span>
                        <span class="navbar-color-option cyan" data-color="cyan"></span>
                        <span class="navbar-color-option teal" data-color="teal"></span>
                        <span class="navbar-color-option light-blue" data-color="light-blue"></span>
                        <span class="navbar-color-option amber darken-3" data-color="amber darken-3"></span>
                        <span class="navbar-color-option brown darken-2" data-color="brown darken-2"></span>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Navbar Dark
                        <label class="float-right"><input class="navbar-dark-checkbox" type="checkbox" /> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Navbar Fixed
                        <label class="float-right"><input class="navbar-fixed-checkbox" type="checkbox" checked /> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
            </div>
            <h6 class="mt-6">Footer Options</h6>
            <hr class="customize-devider" />
            <div class="navbar-options row">
                <div class="input-field col s12">
                    <div class="switch">
                        Footer Dark
                        <label class="float-right"><input class="footer-dark-checkbox" type="checkbox" /> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
                <div class="input-field col s12">
                    <div class="switch">
                        Footer Fixed
                        <label class="float-right"><input class="footer-fixed-checkbox" type="checkbox" /> <span
                                class="lever ml-0"></span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN: Footer-->
    <footer class="page-footer footer gradient-shadow  footer-static   footer-dark gradient-45deg-indigo-purple ">
        <div class="footer-copyright">
            <div class="container center">
                @php
                $year = Carbon\Carbon::now()->format('Y');
                @endphp
                <span>&copy; {{ $year }} <a href="#">CK Vegetables</a> All rights reserved.
                </span>
            </div>
        </div>
    </footer>
    <script src="{{ asset('assets/js/vendors.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    @yield("js")
</body>

<!-- Mirrored from www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Dec 2020 03:43:41 GMT -->

</html>
