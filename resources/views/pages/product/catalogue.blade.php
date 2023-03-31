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


        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-img">
                    <img src="{{url('/')}}/assets/img/foodify/food-1.jpg" alt="card_img">
                </div>
                <div class="ms-card-body ">
                    <div class="wrapper-new2 ">
                        <h6>Pizza</h6>
                        <span class="white">$15</span>
                    </div>
                    <div class="wrapper-new1">
                        <span>Total Order :<strong class="color-red">150</strong> </span>
                        <span>Revenue :<strong class="color-red">$1000</strong></span>


                    </div>
                    <a href="#" class="btn btn-primary btn-md btn-block">See More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-img">
                    <img src="{{url('/')}}/assets/img/foodify/food-2.jpg" alt="card_img">
                </div>
                <div class="ms-card-body ">
                    <div class="wrapper-new2">
                        <h6>Sandwiches</h6>
                        <span class="white">$23</span>
                    </div>
                    <div class="wrapper-new1">
                        <span>Total Order :<strong class="color-red">150</strong> </span>
                        <span>Revenue :<strong class="color-red">$1000</strong></span>


                    </div>
                    <a href="#" class="btn btn-primary btn-block">See More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-img">
                    <img src="{{url('/')}}/assets/img/foodify/food-3.jpg" alt="card_img">
                </div>
                <div class="ms-card-body ">
                    <div class="wrapper-new2">
                        <h6>Fries</h6>
                        <span class="white">$15</span>
                    </div>
                    <div class="wrapper-new1">
                        <span>Total Order :<strong class="color-red">100</strong> </span>
                        <span>Revenue :<strong class="color-red">$1400</strong></span>


                    </div>
                    <a href="#" class="btn btn-primary btn-block">See More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-img">
                    <img src="{{url('/')}}/assets/img/foodify/food-4.jpg" alt="card_img">
                </div>
                <div class="ms-card-body ">
                    <div class="wrapper-new2">
                        <h6>Burger</h6>
                        <span class="white">$34</span>
                    </div>
                    <div class="wrapper-new1">
                        <span>Total Order :<strong class="color-red">200</strong> </span>
                        <span>Revenue :<strong class="color-red">$5000</strong></span>


                    </div>
                    <a href="#" class="btn btn-primary btn-block">See More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-img">
                    <img src="{{url('/')}}/assets/img/foodify/food-5.jpg" alt="card_img">
                </div>
                <div class="ms-card-body ">
                    <div class="wrapper-new2">
                        <h6>Grilled</h6>
                        <span class="white">$25</span>
                    </div>
                    <div class="wrapper-new1">
                        <span>Total Order :<strong class="color-red">180</strong> </span>
                        <span>Revenue :<strong class="color-red">$2000</strong></span>


                    </div>
                    <a href="#" class="btn btn-primary btn-block">See More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="ms-card">
                <div class="ms-card-img">
                    <img src="{{url('/')}}/assets/img/foodify/food-6.jpg" alt="card_img">
                </div>
                <div class="ms-card-body ">
                    <div class="wrapper-new2">
                        <h6>Dumplings</h6>
                        <span class="white">$15</span>
                    </div>
                    <div class="wrapper-new1">
                        <span>Total Order :<strong class="color-red">150</strong> </span>
                        <span>Revenue :<strong class="color-red">$3000</strong></span>


                    </div>
                    <a href="#" class="btn btn-primary btn-block">See More</a>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="load">
                <i class="fas fa-redo alt  space text-muted" aria-hidden="true"></i><span class="more">Load More</span>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script src="{{url('/')}}/assets/js/slick.min.js"></script>
    <script src="{{url('/')}}/assets/js/moment.js"></script>
    <script src="{{url('/')}}/assets/js/jquery.webticker.min.js"></script>
    <script src="{{url('/')}}/assets/js/Chart.bundle.min.js"></script>
    <script src="{{url('/')}}/assets/js/Chart.Financial.js"></script>
@endsection
