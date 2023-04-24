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
                        <table id="tbl-products-list" class="table w-100 thead-primary">
                            <tbody>
                            @foreach($products as $data) @endforeach
                            @php
                                $image = json_decode($data->image);
                                $image = $image[0];

                             $status = $data->is_available == 1 ? 'Active' : 'Inactive';
                            @endphp
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->quantity}}</td>
                                <td>{{$status}}</td>
                                <td>{{$data->price}}</td>
                                <td>
                                    <a href='#'>
                                        <i class='fas fa-pencil-alt text-secondary'></i>
                                    </a>
                                    <a href='a'>
                                        <i class='far fa-trash-alt ms-text-danger'></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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
    <script>
        $('#tbl-products-list').DataTable({
            columns: [{title: "product ID"}, {title: "product Name"}, {title: "Quantity"}, {title: "Status"}, {title: "Price"}, {title: "Action"}]
        });
    </script>
@endsection
