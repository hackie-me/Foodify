@extends('main')

@push('title')
    <title>Product Grid View</title>
@endpush

@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="new">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Menu Grid</li>
                </ol>
            </nav>
            <div class="row">
                @foreach($products as $data)
                    @php
                        $image = json_decode($data->image);
                        $image = $image[0];
                        $status = $data->quantity > 0 ? 'In Stock' : 'Out of Stock';
                        $indicator = $data->quantity > 0 ? 'success' : 'danger';
                    @endphp
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="ms-card">
                            <div class="ms-card-img">
                                <img src="{{$image}}" alt="{{$image}}">
                            </div>
                            <div class="ms-card-body">

                                <div class="new">
                                    <h6 class="mb-0">{{$data->name}} </h6>
                                    <h6 class="ms-text-primary mb-0">$ {{$data->price}}</h6>
                                </div>
                                <div class="new meta">
                                    <p>Qty: {{$data->quantity}} </p>
                                    <span class="badge badge-{{$indicator}}">{{$status}}</span>
                                </div>
                                <p>{{$data->description}}</p>
                                <div class="new mb-0">
                                    <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</button>
                                    <button type="button" class="btn grid-btn mt-0 btn-sm btn-secondary">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@section('page-scripts')

@endsection
