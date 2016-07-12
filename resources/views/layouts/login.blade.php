<!doctype html>
<html class="no-js" lang="es">


<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->

    <title>FOSEPFAP</title>

    <!-- page level plugin styles -->
    <link rel="stylesheet" href="{{URL::to('plugins/chosen/chosen.min.css')}}">
    {{--<link rel="stylesheet" href="{{URL::to('plugins/datatables/jquery.dataTables.css')}}">--}}
    <link rel="stylesheet" href="{{URL::to('https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('plugins/datepicker/datepicker.css')}}">

    <!-- /page level plugin styles -->

    <!-- core styles -->
    <link rel="stylesheet" href="{{URL::to('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/animate.min.css')}}">
    <!-- /core styles -->

    <!-- template styles -->
    <link rel="stylesheet" href="{{URL::to('css/skins/palette.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/fonts/font.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/main3.css')}}">
    <!-- template styles -->

    @yield('styles')

    <style>

    </style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="{{URL::to('plugins/modernizr.js')}}"></script>
</head>

<!-- body -->

<body>
<div class="app">
    <!-- top header -->
    <header class="header header-fixed navbar">

        <div class="brand">
            <!-- toggle offscreen menu -->
            <a href="javascript:;" class="ti-menu off-left visible-xs" data-toggle="offscreen" data-move="ltr"></a>
            <!-- /toggle offscreen menu -->

            <!-- logo -->
            <a href="{{URL::to('login')}}" class="navbar-brand">
            <!--<img src="{{asset('img/cenepred_cut3_100_blue.png')}}" alt="">-->
                <span class="heading-font">
                        FOSEPFAP
                </span>
            </a>
            <!-- /logo -->
        </div>

        <ul class="nav navbar-nav">
            <li class="header-search">
                <!-- toggle search -->
                <a href="javascript:;" class="toggle-search">
                    <!--<i class="ti-search"></i>-->
                </a>
                <!-- /toggle search -->
                <div class="search-container">
                    <form role="search">
                        <input type="text" class="form-control search" placeholder="type and press enter">
                    </form>
                </div>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="off-right">
                <a href="javascript:;">
                    <!--<img src="img/avatar.jpg" class="header-avatar img-circle" alt="user" title="user">-->
                    <!--<span class="hidden-xs ml10">LOGIN</span>-->
                    <!--<i class="ti-angle-down ti-caret hidden-xs"></i>-->
                </a>
            </li>
        </ul>
    </header>
    <!-- /top header -->

    <section class="layout">

        <!-- main content -->
        <section class="main-content">

            <!-- content wrapper -->
            <div class="content-wrap">

                <!-- inner content wrapper -->
                <div class="wrapper">

                    @yield('content')

                </div>
                <!-- /inner content wrapper -->

            </div>
            <!-- /content wrapper -->
            <a class="exit-offscreen"></a>
        </section>
        <!-- /main content -->
    </section>

</div>

<!-- core scripts -->
<script src="{{URL::to('plugins/jquery-1.11.1.min.js')}}"></script>
<script src="{{URL::to('bootstrap/js/bootstrap.js')}}"></script>
<script src="{{URL::to('plugins/jquery.slimscroll.min.js')}}"></script>
<script src="{{URL::to('plugins/jquery.easing.min.js')}}"></script>
<script src="{{URL::to('plugins/appear/jquery.appear.js')}}"></script>
<script src="{{URL::to('plugins/jquery.placeholder.js')}}"></script>
<!-- /core scripts -->

<!-- page level scripts -->
<script src="{{URL::to('plugins/chosen/chosen.jquery.min.js')}}"></script>
{{--<script src="{{URL::to('plugins/datatables/jquery.dataTables.js')}}"></script>--}}
<script src="{{URL::to('https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js')}}"></script>

<script src="{{URL::to('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- /page level scripts -->

<!-- template scripts -->
<script src="{{URL::to('js/offscreen.js')}}"></script>
<script src="{{URL::to('js/main.js')}}"></script>
<!-- /template scripts -->

<!-- page script -->
<script src="{{URL::to('js/bootstrap-datatables.js')}}"></script>
<!-- /page script -->


@yield('scripts')


</body>
<!-- /body -->


<!-- Mirrored from sublime.nyasha.me/admin/datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Aug 2014 03:54:01 GMT -->
</html>
