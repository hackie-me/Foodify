@extends('main')

@push('title')
    <title>Customers List</title>
@endpush

@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Customer</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Customer List</li>
                </ol>
            </nav>
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Customer List</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="data-table-4" class="table w-100 thead-primary"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')

@endsection
