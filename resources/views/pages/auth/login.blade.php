<!DOCTYPE html>
<html lang="en">
{{--Header--}}
@include('layout.header')
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
{{--Preloader--}}
@include('includes.pre_loader')
<!-- Main Content -->
<main class="body-content">
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper ms-auth">
        <div class="ms-auth-container">
            <div class="ms-auth-col">
                <div class="ms-auth-bg"></div>
            </div>
            <div class="ms-auth-col">
                <div class="ms-auth-form">
                    <form class="needs-validation" novalidate="" action="{{url('/')}}/auth/login" method="post">
                        @csrf
                        <h3>Login to Account</h3>
                        <p>Please enter your email and password to continue</p>
                        <div class="mb-3">
                            <label for="validationCustom08">Email Address</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="validationCustom08" placeholder="Email Address" required="" name="email">
                                <div class="invalid-feedback">Please provide a valid email.</div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="validationCustom09">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="validationCustom09" placeholder="Password" required="" name="password">
                                <div class="invalid-feedback">Please provide a password.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="ms-checkbox-wrap">
                                <input class="form-check-input" type="checkbox" value="" name="remember"> <i class="ms-checkbox-check"></i>
                            </label> <span> Remember Password </span>
                            <label class="d-block mt-3"><a href="#" class="btn-link" data-toggle="modal" data-target="#modal-12">Forgot Password?</a>
                            </label>
                        </div>
                        <button class="btn btn-primary mt-4 d-block w-100" type="submit">Sign In</button>
                        <p class="mb-0 mt-3 text-center">Don't have an account? <a class="btn-link" href="{{url('/')}}/auth/register">Create Account</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Forgot Password Modal -->
    <div class="modal fade" id="modal-12" tabindex="-1" role="dialog" aria-labelledby="modal-12">
        <div class="modal-dialog modal-dialog-centered modal-min" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button> <i class="flaticon-secure-shield d-block"></i>
                    <h1>Forgot Password?</h1>
                    <p>Enter your email to recover your password</p>
                    <form method="post">
                        <div class="ms-form-group has-icon">
                            <input type="text" placeholder="Email Address" class="form-control" name="forgot-password" value=""> <i class="material-icons">email</i>
                        </div>
                        <button type="submit" class="btn btn-primary shadow-none">Reset Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- SCRIPTS -->
@push('page-scripts')

@endpush
</body>
@include('layout.footer')
</html>
