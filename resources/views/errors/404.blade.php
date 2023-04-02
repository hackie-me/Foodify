<!DOCTYPE html>
<html lang="en">
{{--Header--}}
@include('layout.header')
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
<!-- Main Content -->
<main class="body-content">
    <div class="ms-content-wrapper">
        <i class="flaticon-computer"></i>
        <h1>Error 404</h1>
        <h3>Oops! Page Not Found!</h3>
        <p>The link you followed may be broken, or the page has been removed</p>
        <a href="{{url('/')}}" class="btn btn-white"> <i class="material-icons">arrow_back</i> Back Home</a>
    </div>
</main>
</body>
{{--Footer--}}
@include('layout.footer')
</html>
