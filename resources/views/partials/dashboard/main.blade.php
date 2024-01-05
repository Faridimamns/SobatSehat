<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    {{-- <title>Dashboard | @yield('title')</title> --}}
    <title>Dashboard | {{$title}}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="/assetsDashboard/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="/assetsDashboard/css/ready.css">
    <link rel="stylesheet" href="/assetsDashboard/css/demo.css">
</head>

<body>
    <div class="wrapper">

        {{-- ini navbar --}}

        @include('partials.dashboard.navbar')
       

        {{-- ini navbar --}}


        {{-- ini side bar --}}
        @include('partials.dashboard.sidebar')

        {{-- ini side bar --}}
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                   

                    @yield('content')


                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- Modal -->

</body>
<script src="/assetsDashboard/js/core/jquery.3.2.1.min.js"></script>
<script src="/assetsDashboard/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="/assetsDashboard/js/core/popper.min.js"></script>
<script src="/assetsDashboard/js/core/bootstrap.min.js"></script>
<script src="/assetsDashboard/js/plugin/chartist/chartist.min.js"></script>
<script src="/assetsDashboard/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
{{-- <script src="assetsDashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> --}}
<script src="/assetsDashboard/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="/assetsDashboard/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/assetsDashboard/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="/assetsDashboard/js/plugin/chart-circle/circles.min.js"></script>
<script src="/assetsDashboard/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="/assetsDashboard/js/ready.min.js"></script>
<script src="/assetsDashboard/js/demo.js"></script>

</html>
