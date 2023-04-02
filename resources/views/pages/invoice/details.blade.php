@extends('main')

@push('title')
    <title>Invoice Details</title>
@endpush

@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Invoice</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Invoice Details</li>
                </ol>
            </nav>
            <div class="ms-panel">
                <div class="ms-panel-header header-mini">
                    <div class="d-flex justify-content-between">
                        <h6>Invoice</h6>
                        <h6>#135178</h6>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <!-- Invoice To -->
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="invoice-address">
                                <h3>Reciever: </h3>
                                <h5>Anny Farisha</h5>
                                <p>Anny.123@hotmail.com</p>
                                <p class="mb-0">1642 Cambridge Drive, Phoenix, 85029 Arizona</p>
                                <p class="mb-0">Arizona</p>
                                <p>Phoenix</p>
                            </div>
                        </div>
                        <div class="col-md-6 text-md-right">
                            <ul class="invoice-date">
                                <li>Invoice Date : Saturday, April 07 2022</li>
                                <li>Due Date : Sunday, April 19 2022</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Invoice Table -->
                    <div class="ms-invoice-table table-responsive mt-5">
                        <table class="table table-hover text-right thead-light">
                            <thead>
                            <tr class="text-capitalize">
                                <th class="text-center w-5">id</th>
                                <th class="text-left">description</th>
                                <th>qty</th>
                                <th>Unit Cost</th>
                                <th>total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-left">Grilled Sandwich</td>
                                <td>1</td>
                                <td>$30</td>
                                <td>$30</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-left">Fried Egg Sandwich</td>
                                <td>1</td>
                                <td>$69</td>
                                <td>$69</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-left">Spicy Grilled Burger</td>
                                <td>2</td>
                                <td>$19</td>
                                <td>$38</td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-left">Peri Peri Fries</td>
                                <td>2</td>
                                <td>$9</td>
                                <td>$18</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="4">Total Cost:</td>
                                <td>$155</td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="invoice-buttons text-right"> <a href="#" class="btn btn-primary mr-2">Print Invoice</a>
                        <a href="#" class="btn btn-primary">Send Invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')

@endsection
