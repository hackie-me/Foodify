@extends('main')

@push('title')
    <title>Settings</title>
@endpush

@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <x-bread-crump url="settings" title="settings"/>
        </div>
    </div>
    <div class="ms-panel clearfix p-5">
        <ul class="nav nav-tabs tabs-bordered left-tabs nav-justified" role="tablist" aria-orientation="vertical">
            <li role="presentation"><a href="#tab-overview" aria-controls="tab-overview" role="tab" data-toggle="tab">
                    Overview </a></li>
            <li role="presentation"><a href="#tab-profile" aria-controls="tab-profile" role="tab" data-toggle="tab">
                    Profile </a></li>
            <li role="presentation"><a href="#tab-settings" aria-controls="tab-settings" role="tab" data-toggle="tab">
                    Settings </a></li>
            <li role="presentation"><a href="#tab-email" aria-controls="tab-email" role="tab" class="active show"
                                       data-toggle="tab"> Email </a></li>
            <li role="presentation"><a href="#tab-api" aria-controls="tab-api" role="tab" data-toggle="tab"> API </a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade" id="tab-overview">
                <h5>overview</h5>
                <hr>

            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab-profile">
                <h5>Profile</h5>
                <hr>

            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab-settings">
                <h5>Settings</h5>
                <hr>

            </div>
            <div role="tabpanel" class="tab-pane fade active show in" id="tab-email">
                <h5>Email</h5>
                <hr>
                <form class="needs-validation" novalidate="" action="{{url('/')}}/settings/mail" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6 mb-4">
                            <label for="validationCustom01">SMTP Host</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="SMTP Host"
                                   value="" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="validationCustom02">SMTP Port</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="SMTP Port"
                                   value="" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-4">
                            <label for="validationCustom03">SMTP Username</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="SMTP Username"
                                   value="" required="">
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="validationCustom04">SMTP Password</label>
                            <input type="text" class="form-control" id="validationCustom04" placeholder="SMTP Password"
                                   value="" required="">
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-4">
                            <label for="validationCustom05">SMTP Encryption</label>
                            {{--Select Box to select from SSL or TLS --}}
                            <select class="form-control" id="validationCustom05" required="">
                                <option value="">Select Encryption</option>
                                <option value="ssl">SSL</option>
                                <option value="tls">TLS</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid Encryption method.
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="validationCustom06">SMTP From Address</label>
                            <input type="email" class="form-control" id="validationCustom06"
                                   placeholder="SMTP From Address"
                                   value="" required="">
                            <div class="invalid-feedback">
                                Please provide a valid Email Address.
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4 d-block w-100" type="submit">UPDATE</button>
                </form>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab-api">
                <h5>API</h5>
                <hr>
            </div>
        </div>
    </div>
@endsection
@push('page-scripts')
    <script>
        // show success toast
        @if(session()->has('success'))
            toastr.success("{{ session()->get('success') }}");
        @endif
    </script>
@endpush
