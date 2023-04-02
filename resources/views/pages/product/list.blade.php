@extends('main')

@push('title')
    <title>Product List View</title>
@endpush

@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Menu List</li>
                </ol>
            </nav>
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Product List</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="data-table-5" class="table w-100 thead-primary"></table>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection

@section('page-scripts')
    <script src="{{url('/')}}/assets/js/slick.min.js"></script>
    <script src="{{url('/')}}/assets/js/moment.js"></script>
    <script src="{{url('/')}}/assets/js/jquery.webticker.min.js"></script>
    <script src="{{url('/')}}/assets/js/Chart.bundle.min.js"></script>
    <script src="{{url('/')}}/assets/js/Chart.Financial.js"></script>

    <!-- Page Specific Scripts Finish -->
    <script src="{{url('/')}}/assets/js/datatables.min.js"></script>
    <script src="{{url('/')}}/assets/js/data-tables.js"></script>
@endsection
