<!doctype html>
<html class="no-js h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shop/_partials/head2')

<body class="h-100">
<div class="container-fluid">
    <div class="row">
        <!-- Main Sidebar -->
    @include('shop/_partials/sidebar')
    <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            <div class="main-navbar sticky-top bg-white">
                <!-- Main Navbar -->
            @include('shop/_partials/appNav')
            <!-- / .main-navbar -->
                <div class="main-content-container container-fluid px-4">
                    <!-- Page Header -->
                @include('shop\_partials\appMainCointainer')
                <!-- End Page Header -->
                    <div class="row">
                        <div class="col-lg-9 col-md-12">
                            <!-- Add New Post Form -->
            @include('shop/pages/addPost2')

        </main>
    </div>
</div>

</html>
