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
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-img">
                            <img src="../../assets/img/foodtech/food-1.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">

                            <div class="new">
                                <h6 class="mb-0">Veggies </h6>
                                <h6 class="ms-text-primary mb-0">$45.50</h6>
                            </div>
                            <div class="new meta">
                                <p>Qty:1467 </p>
                                <span class="badge badge-success">In Stock</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur
                                adipiscing</p>
                            <div class="new mb-0">
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</button>
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-secondary">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-img">
                            <img src="../../assets/img/foodtech/food-2.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                            <div class="new">
                                <h6 class="mb-0">Garlic Bread </h6>
                                <h6 class="ms-text-primary mb-0">$45.50</h6>
                            </div>
                            <div class="new meta">
                                <p>Qty:6224 </p>
                                <span class="badge badge-primary">Out of Stock</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur
                                adipiscing</p>
                            <div class="new mb-0">
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</button>
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-secondary">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-img">
                            <img src="../../assets/img/foodtech/food-3.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                            <div class="new">
                                <h6 class="mb-0">Veg Sandwich </h6>
                                <h6 class="ms-text-primary mb-0">$45.50</h6>
                            </div>
                            <div class="new meta">
                                <p>Qty:1467 </p>
                                <span class="badge badge-success">In Stock</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur
                                adipiscing</p>
                            <div class="new mb-0">
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</button>
                                <button type="button" class="btn  grid-btn mt-0 btn-sm btn-secondary">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-img">
                            <img src="../../assets/img/foodtech/food-4.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                            <div class="new">
                                <h6 class="mb-0">Roast Sandwich</h6>
                                <h6 class="ms-text-primary mb-0">$45.50</h6>
                            </div>
                            <div class="new meta">
                                <p>Qty:6224 </p>
                                <span class="badge badge-primary">Out of Stock</span>
                            </div>


                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur
                                adipiscing</p>
                            <div class="new mb-0">
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</button>
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-secondary">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-img">
                            <img src="../../assets/img/foodtech/food-5.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                            <div class="new">
                                <h6 class="mb-0">Burger</h6>
                                <h6 class="ms-text-primary mb-0">$45.50</h6>
                            </div>
                            <div class="new meta">
                                <p>Qty:1467 </p>
                                <span class="badge badge-success">In Stock</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur
                                adipiscing</p>
                            <div class="new mb-0">
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</button>
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-secondary">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-img">
                            <img src="../../assets/img/foodtech/food-6.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                            <div class="new">
                                <h6 class="mb-0">Veggies </h6>
                                <h6 class="ms-text-primary mb-0">$45.50</h6>
                            </div>
                            <div class="new meta">
                                <p>Qty:1467 </p>
                                <span class="badge badge-success">In Stock</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur
                                adipiscing</p>
                            <div class="new mb-0">
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</button>
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-secondary">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-img">
                            <img src="../../assets/img/foodtech/food-7.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                            <div class="new">
                                <h6 class="mb-0">Pepperoni Pizza </h6>
                                <h6 class="ms-text-primary mb-0">$45.50</h6>
                            </div>
                            <div class="new meta">
                                <p>Qty:6224 </p>
                                <span class="badge badge-primary">Out of Stock</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur
                                adipiscing</p>
                            <div class="new mb-0">
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</button>
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-secondary">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="ms-card">
                        <div class="ms-card-img">
                            <img src="../../assets/img/foodtech/food-8.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                            <div class="new">
                                <h6 class="mb-0">Egg McMuffin </h6>
                                <h6 class="ms-text-primary mb-0">$45.50</h6>
                            </div>
                            <div class="new meta">
                                <p>Qty:1467 </p>
                                <span class="badge badge-success">In Stock</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur
                                adipiscing</p>
                            <div class="new mb-0">
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-primary">Remove</button>
                                <button type="button" class="btn grid-btn mt-0 btn-sm btn-secondary">Edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-script')

@endsection
