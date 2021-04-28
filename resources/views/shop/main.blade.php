<!DOCTYPE html>
<html lang="en">
@include('shop/_partials/head')
<body>
<!-- Navigation-->
@include('shop/_partials/navnew')
<!-- Page Header-->
@include('shop/_partials/header')
<!-- Main Content-->

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        @yield('content')
        </div>
    </div>
</div>
<hr />


<!-- Footer-->
@include('shop/_partials/footer')
<!-- Bootstrap core JS-->

<!-- Core theme JS-->
<!--<script src=""></script>JS-->
</body>
</html>
