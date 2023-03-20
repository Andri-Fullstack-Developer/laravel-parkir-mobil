<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admistrator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="">
    <style>
        .table-responsive {
            overflow-x: auto;
        }

        .icon-edit:hover {
            color: #17a2b8;
            transform: scale(1.5);
        }

        div {
            text-decoration: none;
        }

        .icon-delete:hover {
            color: #dc3545;
            transform: scale(1.5);
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('dash/css/styles.css') }}" rel="stylesheet" />

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dash/vendors/feather/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/vendors/ti-icons/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/vendors/typicons/typicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/vendors/simple-line-icons/css/simple-line-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/vendors/css/vendor.bundle.base.css') }}" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('dash/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}" />
    <link rel="stylesheet" href="{{ asset('dash/js/select.dataTables.min.css') }}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dash/css/vertical-layout-light/style.css') }}" />
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div>@section('sidear')
            @include('layout.back.inc.sidear')
        @show</div>
        
        <!-- Page content wrapper-->


        <!-- Top navigation-->
        @section('header')
            @include('layout.back.inc.header')
        @show
        <!-- Page content-->
        {{-- <div class="container-fluid z-50 mt-5">
            @yield('content')
        </div> --}}

        <div class="container-fluid mt-5">
            @section('hasil')
                @include('layout.back.inc.hasil')
            @show
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <script src="{{ asset('back/https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}">
    </script>
    <!-- Core theme JS-->
    <script src="{{ asset('back/js/scripts.js') }}"></script>


    <!-- plugins:js -->
    <script src="{{ asset('dash/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('dash/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('dash/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('dash/vendors/progressbar.js/progressbar.min.js') }}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('dash/js/off-canvas.js') }}"></script>
    <script src="{{ asset('dash/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('dash/js/template.js') }}"></script>
    <script src="{{ asset('dash/js/settings.js') }}"></script>
    <script src="{{ asset('dash/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('dash/js/dashboard.js') }}"></script>
    <script src="{{ asset('dash/js/Chart.roundedBarCharts.js') }}"></script>
    <!-- End custom js for this page-->
    <script src="{{ asset('dash/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
</body>

</html>
