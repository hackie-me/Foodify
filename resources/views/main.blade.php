<!DOCTYPE html>
<html lang="en">
{{--Header--}}
@include('layout.header')
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
{{--Preloader--}}
@include('includes.pre_loader')
{{--Overlays--}}
@include('includes.overlays')
{{--Sidebar Left--}}
@include('includes.sidebar.sidebar_left')
{{--Sidebar Right--}}
@include('includes.sidebar.sidebar_right')
{{--Main Content--}}
<!-- Main Content -->
<main class="body-content">
    <!-- Navigation Bar -->
    @include('includes.navbar')
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
        @yield('main_content')
    </div>
</main>
<!-- Quick bar -->
@include('includes.quick_bar')
<!-- Modals -->
@include('includes.modal.modal_notes')
@include('includes.modal.modal_reminder')
<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
@include('includes.scripts')
@push('page_scripts')
    @yield('page_scripts')
@endpush
</body>
{{--Footer--}}
@include('layout.footer')
</html>
