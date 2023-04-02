<!DOCTYPE html>
<html lang="en">
{{--Header--}}
@include('layout.header')
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
{{--Preloader--}}
@include('includes.pre_loader')
<!-- Main Content -->
<main class="body-content ms-coming-soon">
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
        <h1>We Are Coming Soon</h1>
        <p class="ms-duration">Our Exciting Website is Under Construction</p>
        <ul id="countdown-duration" class="ms-list-flex">
            <li>
                <p class="ms-duration" id="days"></p>
                <p class="ms-duration">Days</p>
            </li>
            <li>
                <p class="ms-duration" id="hours"></p>
                <p class="ms-duration">Hours</p>
            </li>
            <li>
                <p class="ms-duration" id="minutes"></p>
                <p class="ms-duration">Minutes</p>
            </li>
            <li>
                <p class="ms-duration" id="seconds"></p>
                <p class="ms-duration">Seconds</p>
            </li>
        </ul>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Your Email">
            <div class="input-group-append">
                <button type="button" name="update" class="btn btn-primary">Get Updated</button>
            </div>
        </div>
        <ul class="ms-list-flex ms-social-container">
            <li> <a target="_self" class="ms-social ms-fb" href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li> <a target="_self" class="ms-social ms-pnt" href="#"><i class="fab fa-pinterest-p"></i></a>
            </li>
            <li> <a target="_self" class="ms-social ms-tw" href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li> <a target="_self" class="ms-social ms-wa" href="#"><i class="fab fa-whatsapp"></i></a>
            </li>
            <li> <a target="_self" class="ms-social ms-skype" href="#"><i class="fab fa-skype"></i></a>
            </li>
            <li> <a target="_self" class="ms-social ms-g-plus" href="#"><i class="fab fa-google-plus-g"></i></a>
            </li>
        </ul>
    </div>
</main>
<!-- SCRIPTS -->
@push('page-scripts')
    <script src="{{url('/')}}/assets/js/jquery.countdown.min.js"></script>
    <script src="{{url('/')}}/assets/js/coming-soon.js"></script>
@endpush
</body>
@include('layout.footer')
</html>
