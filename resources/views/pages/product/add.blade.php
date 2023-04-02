@extends('main')

@push('title')
    <title>Add New Product</title>
@endpush

@section('main_content')
    <div class="row">

        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                </ol>
            </nav>
        </div>


        <div class="col-xl-6 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <h6>Add Product Form</h6>
                </div>
                <div class="ms-panel-body">
                    <form class="needs-validation clearfix" novalidate="">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom18">Product Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom18"
                                           placeholder="Product Name" value="Pizza" required="">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom22">Select Catagory</label>
                                <div class="input-group">
                                    <select class="form-control" id="validationCustom22" required="">
                                        <option value="">Catagory 1</option>
                                        <option value="">Catagory 2</option>
                                        <option value="">Catagory 3</option>
                                        <option value="">Catagory 4</option>

                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a Catagory.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom23">Currency</label>
                                <div class="input-group">
                                    <select class="form-control" id="validationCustom23" required="">
                                        <option value="">USD</option>
                                        <option value="">Bitcoins</option>
                                        <option value="">EURO</option>

                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a Currency
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom24">Quantity</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom24" placeholder="01"
                                           required="">
                                    <div class="invalid-feedback">
                                        Quantity
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom25">Price</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="validationCustom25" placeholder="$10"
                                           required="">
                                    <div class="invalid-feedback">
                                        Price
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom12">Description</label>
                                <div class="input-group">
                                    <textarea rows="5" id="validationCustom12" class="form-control"
                                              placeholder="Message" required=""></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a message.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom12">Product Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile">
                                    <label class="custom-file-label" for="validatedCustomFile">Upload Images...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                                </div>
                            </div>
                        </div>


                    </form>

                </div>
            </div>

        </div>

        <div class="col-xl-6 col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header">
                            <h6>Product </h6>
                        </div>
                        <div class="ms-panel-body">
                            <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{url('/')}}/assets/img/foodify/add-product-1.jpg"
                                             alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{url('/')}}/assets/img/foodify/add-product-2.jpg"
                                             alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{url('/')}}/assets/img/foodify/add-product-3.jpg"
                                             alt="Third slide">
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li data-target="#imagesSlider" data-slide-to="0" class="active"><img
                                            class="d-block w-100" src="{{url('/')}}/assets/img/foodify/add-product-1.jpg"
                                            alt="First slide"></li>
                                    <li data-target="#imagesSlider" data-slide-to="1"><img class="d-block w-100"
                                                                                           src="{{url('/')}}/assets/img/foodify/add-product-2.jpg"
                                                                                           alt="Second slide"></li>
                                    <li data-target="#imagesSlider" data-slide-to="2"><img class="d-block w-100"
                                                                                           src="{{url('/')}}/assets/img/foodify/add-product-3.jpg"
                                                                                           alt="Third slide"></li>
                                </ol>
                            </div>
                        </div>
                        <div class="ms-panel-header new">
                            <p class="medium">Status Available</p>
                            <div>
                                <label class="ms-switch">
                                    <input type="checkbox">
                                    <span class="ms-switch-slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="ms-panel-header new">
                            <p class="medium">Discount Active</p>
                            <div>
                                <label class="ms-switch">
                                    <input type="checkbox" checked="">
                                    <span class="ms-switch-slider round"></span>
                                </label>
                            </div>
                        </div>
                        <div class="ms-panel-header new">
                            <button class="btn btn-secondary d-block" type="submit">Save</button>
                            <button class="btn btn-primary d-block" type="submit">Save and Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')

@endsection
