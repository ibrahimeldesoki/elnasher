<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('images/favicon/apple-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website/img/logos/logo-icon.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/vendors.min.css')}}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/vertical-modern-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/themes/vertical-modern-menu-template/style.css?v=2')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/fontawesome/css/regular.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/fontawesome/css/solid.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/sweetalert/sweetalert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/pickadate/themes/default.css?v=2')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/pickadate/themes/default.date.css?v=3')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loading.css')}}">
    <!-- END: Page Level CSS-->
    @yield("page_css")
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom/custom.css?v=1')}}">
    <!-- END: Custom CSS-->
    <script>

    </script>
</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns @yield('body_classes')" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('dashboard.header')  {{-- Include header file --}}
    <!-- END: Header-->


    <!-- BEGIN: SideNav-->
    @include('dashboard.sidebar') {{-- Include sidebar file --}}
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
            <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0">@yield('title')</h5>
                            <ol class="breadcrumbs mb-0">
                                @yield('breadcrumbs')
                            </ol>
                        </div>
                        @yield('settings')

                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="card">
                            <div class="card-content">
                                @yield("middle_content")
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->
    @include('dashboard.footer') {{-- Include footer file --}}
    <!-- END: Footer-->
@yield('categories.categories')

    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{asset('js/plugins.js')}}" type="text/javascript"></script>
    <script src="{{ asset('vendors/sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('vendors/pickadate/picker.js?v=2')}}" type="text/javascript"></script>
    <script src="{{ asset('vendors/pickadate/picker.date.js?v=2')}}" type="text/javascript"></script>
    <script src="{{ asset('js/scripts/ui-alerts.js')}}" type="text/javascript"></script>
    @yield("page_js")
    <script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/custom/custom-script.js')}}" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
{{--tiny cdn --}}



</body>

</html>
