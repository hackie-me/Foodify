<!DOCTYPE html>
<html lang="en">
{{--Header--}}
@include('layout.header')
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
{{--Preloader--}}
@include('includes.pre_loader')
<!-- Main Content -->
<main class="">
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper ms-auth">
        <div class="ms-auth-container">
            <div class="ms-auth-col">
                {{-- List out all error --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="ms-auth-form">
                    <form class="needs-validation" novalidate="" action="{{url('/')}}/auth/register" method="post">
                        @csrf
                        <h3>Create Account</h3>
                        <p>Please enter personal information to continue</p>
                        <div class="form-row">
                            <div class="col-md-6 ">
                                <label for="validationCustom01">First name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom01"
                                           placeholder="First name" value="John" required="" name="first_name">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <label for="validationCustom02">Last name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom02"
                                           placeholder="Last name" value="Doe" required="" name="last_name">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 ">
                                <label for="validationCustom03">Email Address</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="validationCustom03"
                                           placeholder="Email Address" required="" name="email">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <label for="validationCustom04">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="validationCustom04"
                                           placeholder="Password" required="" name="password">
                                    <div class="invalid-feedback">
                                        Please provide a password.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check pl-0">
                                <label class="ms-checkbox-wrap">
                                    <input class="form-check-input" type="checkbox" id="invalidCheck"
                                           required="" name="terms">
                                    <i class="ms-checkbox-check"></i>
                                </label>
                                <span> Agree to terms and conditions </span>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-4 d-block w-100" type="submit">Create Account</button>
                        <p class="mb-0 mt-3 text-center">Already have an account?
                            <a class="btn-link" href="{{url('/')}}/auth/login">Login</a>
                        </p>
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
