<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.css')
    @yield('style')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('Admin.side')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('Admin.nav')

            <!-- partial -->
            @yield('content')

            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('Admin.script')
</body>

</html>
