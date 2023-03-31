@extends('main')

@push('title')
    <title>Sales</title>
@endpush

@section('main_content')
    <div class="row">

        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sales</li>
                </ol>
            </nav>
        </div>
        <div class="col-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Product Sale</h6>
                </div>
                <div class="ms-panel-body">

                    <div class="table-responsive">
                        <table id="data-table-1" class="table table-hover w-100"></table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('page_scripts')

@endsection
