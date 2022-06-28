<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title> | ADMIN</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('vendors/images/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('templete/vendors/images/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('templete/vendors/images/favicon-16x16.png')}}">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"></link>
    <link rel="stylesheet" type="text/css" href="{{ asset('templete/vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete/vendors/styles/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('templete/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('templete/vendors/styles/style.css') }}">

</head>

<body>
    {{-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div> --}}

    @include('admin.layouts.header')
    @include('admin.layouts.sideNav')
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
       <div class="mb-15 ml-0 mt-15">
         @yield('content')
       </div>
    </div>
      @yield('script')
    <script>
         $(document).ready(function () {
            $('#permission').DataTable();

            $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
            });
        });
    </script>
    <!-- js -->
    <script src="{{ asset('templete/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('templete/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('templete/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('templete/vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('templete/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('templete/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('templete/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('templete/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('templete/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('templete/vendors/scripts/dashboard.js') }}"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>



</body>

</html>
