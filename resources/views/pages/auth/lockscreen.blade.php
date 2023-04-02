<!DOCTYPE html>
<html lang="en">
{{--Header--}}
@include('layout.header')
<body class="ms-body ms-primary-theme">
{{--Preloader--}}
@include('includes.pre_loader')
<!-- Main Content -->
<div class="ms-lock-screen-weather">
    <p>38&deg;</p>
    <p>San Francisco, CA</p>
</div>

<ul class="ms-lock-screen-nav">
    <li class="ms-nav-item dropdown">
        <a href="#" class="text-disabled ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">email</i></a>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="mailDropdown">
            <li class="dropdown-menu-header">
                <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Mail</span></h6><span class="badge badge-pill badge-success">3 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
                <a class="media p-2" href="#">
                    <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                        <img src="{{url('/')}}/assets/img/people/people-3.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body">
                        <span>Hey man, looking forward to your new project.</span>
                        <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                    </div>
                </a>
                <a class="media p-2" href="#">
                    <div class="ms-chat-status ms-status-online ms-chat-img mr-2 align-self-center">
                        <img src="{{url('/')}}/assets/img/people/people-5.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body">
                        <span>Dear John, I was told you bought Foodtech! Send me your feedback</span>
                        <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 28 minutes ago</p>
                    </div>
                </a>
                <a class="media p-2" href="#">
                    <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                        <img src="{{url('/')}}/assets/img/people/people-3.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body">
                        <span>How many people are we inviting to the dashboard?</span>
                        <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 6 hours ago</p>
                    </div>
                </a>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center">
                <a href="{{url('/')}}/app/email">Go to Inbox</a>
            </li>
        </ul>
    </li>
    <li class="ms-nav-item dropdown">
        <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">notifications</i></a>
        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
            <li class="dropdown-menu-header">
                <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6><span class="badge badge-pill badge-info">4 New</span>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-scrollable ms-dropdown-list">
                <a class="media p-2" href="#">
                    <div class="media-body">
                        <span>12 ways to improve your crypto dashboard</span>
                        <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                    </div>
                </a>
                <a class="media p-2" href="#">
                    <div class="media-body">
                        <span>You have newly registered users</span>
                        <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                    </div>
                </a>
                <a class="media p-2" href="#">
                    <div class="media-body">
                        <span>Your account was logged in from an unauthorized IP</span>
                        <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                    </div>
                </a>
                <a class="media p-2" href="#">
                    <div class="media-body">
                        <span>An application form has been submitted</span>
                        <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                    </div>
                </a>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer text-center">
                <a href="#">View all Notifications</a>
            </li>
        </ul>
    </li>
</ul>

<!-- Main Content -->
<main class="body-content ms-lock-screen">

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
        <img class="ms-user-img ms-img-round ms-lock-screen-user" src="{{url('/')}}/assets/img/foodify/customer-3.jpg" alt="people">
        <h1>John Doe</h1>
        <form method="post">
            <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                <input type="password" class="ms-form-input" name="pin" placeholder="Enter Pin" value="">
                <i class="material-icons">security</i>
            </div>
            <a href="{{url('/')}}" class="btn bg-black w-100">Unlock</a>
        </form>

    </div>

</main>

<div class="ms-lock-screen-time">
    <p>04:25</p>
    <p>Friday, January 9</p>
</div>
<!-- SCRIPTS -->
@push('page-scripts')

@endpush
</body>
@include('layout.footer')
</html>
