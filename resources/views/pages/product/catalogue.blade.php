@extends('main')

@push('title')
    <title>Product Catalogue</title>
@endpush

@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Menu Catalogue</li>
                </ol>
            </nav>
        </div>


        {{-- All Products List--}}
        @foreach($products as $data)
            <div class="col-lg-4 col-md-6 col-sm-6 content">
                <div class="ms-card">
                    <div class="ms-card-img">
                        @php
                            $image = json_decode($data->image);
                            $image = $image[0];
                        @endphp
                        <img src="{{$image}}" style="height: 200px!important; width: 100% !important;" alt="card_img">
                    </div>
                    <div class="ms-card-body ">
                        <div class="wrapper-new2 ">
                            <h6>{{$data->name}}</h6>
                            <span class="white">$ {{$data->price}}</span>
                        </div>
                        <div class="wrapper-new1">
                            <span>Total Order :<strong class="color-red">150</strong> </span>
                            <span>Revenue :<strong class="color-red">$1000</strong></span>
                        </div>
                        <a href="#" class="btn btn-primary btn-md btn-block">See More</a>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="col-xl-12 col-md-12">
            <div class="load" id="loadMore">
                <i class="fas fa-redo alt  space text-muted" aria-hidden="true"></i><span class="more">Load More</span>
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
        $(document).ready(function(){
            $(".content").slice(0, 4).show();
            $("#loadMore").on("click", function(e){
                e.preventDefault();
                $(".content:hidden").slice(0, 4).slideDown();
                if($(".content:hidden").length == 0) {
                    $("#loadMore").text("No Content").addClass("noContent");
                }
            });
        })
    </script>
@endsection
