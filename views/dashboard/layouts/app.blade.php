@include('dashboard.layouts.head')

@yield('style')

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('images/logo.png')}}" alt="AdminLTELogo">
        </div>
        @include('dashboard.layouts.navbar')

        @include('dashboard.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content-header">
{{--            @yield('content-header')--}}
                @include('dashboard.layouts.errors')
                @include('dashboard.layouts.success')
            </div>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

{{--        @include('dashboard.layouts.footer')--}}
    </div>




    <!-- jQuery -->
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('admin/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('admin/plugins/sparklines/sparkline.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('admin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/js/adminlte.js')}}"></script>
{{--    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>--}}
{{--    <script src="{{asset('admin/plugins/ckeditor_ar.js')}}"></script>--}}
    <script>
        $('.select2').select2({
            theme: 'bootstrap4'
        })
    </script>
    @yield('scripts')
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/scroll.js'])
</body>
</html>
