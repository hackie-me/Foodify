@extends('main')

@push('title')
    <title>Sales</title>
@endpush

@section('main_content')
    <div class="row">

        <div class="col-md-12">
            <x-bread-crump url="sales" title="sales"/>
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

@section('page-scripts')

@endsection
