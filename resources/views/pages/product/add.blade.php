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
                                    <input type="file" accept="image/*" multiple class="custom-file-input"
                                           id="validatedCustomFile">
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
                        {{-- Product Imamge Carousel --}}
                        <div class="ms-panel-body">
                            <div id="imagesSlider" class="ms-image-slider carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                             src="{{url('/')}}/assets/img/foodify/add-product-1.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                             src="{{url('/')}}/assets/img/foodify/add-product-2.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                             src="{{url('/')}}/assets/img/foodify/add-product-3.jpg" alt="Third slide">
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li data-target="#imagesSlider" data-slide-to="0" class="active">
                                        <img class="d-block w-100"
                                             src="{{url('/')}}/assets/img/foodify/add-product-1.jpg" alt="First slide">
                                    </li>
                                    <li data-target="#imagesSlider" data-slide-to="1">
                                        <img class="d-block w-100"
                                             src="{{url('/')}}/assets/img/foodify/add-product-2.jpg" alt="Second slide">
                                    </li>
                                    <li data-target="#imagesSlider" data-slide-to="2">
                                        <img class="d-block w-100"
                                             src="{{url('/')}}/assets/img/foodify/add-product-3.jpg" alt="Third slide">
                                    </li>
                                </ol>
                            </div>
                        </div>
                        {{-- Product Imamge Carousel Ends --}}

                        {{-- Featured --}}
                        <div class="ms-panel-header new">
                            <p class="medium">Featured</p>
                            <div>
                                <label class="ms-switch">
                                    <input type="checkbox" checked="">
                                    <span class="ms-switch-slider round"></span>
                                </label>
                            </div>
                        </div>

                        {{-- Status --}}
                        <div class="ms-panel-header new">
                            <p class="medium">Status Available</p>
                            <div>
                                <label class="ms-switch">
                                    <input type="checkbox">
                                    <span class="ms-switch-slider round"></span>
                                </label>
                            </div>
                        </div>

                        {{-- Discount --}}
                        <div class="ms-panel-header new">
                            <p class="medium">Discount Active</p>
                            <div>
                                <label class="ms-switch">
                                    <input type="checkbox" checked="">
                                    <span class="ms-switch-slider round"></span>
                                </label>
                            </div>
                        </div>

                        {{-- Buttons --}}
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
    <script>
        $(function () {
            // Get references to the relevant DOM elements
            const $input = $('input[type="file"]');
            const $carouselInner = $('.carousel-inner');
            const $carouselIndicators = $('.carousel-indicators');

            // Listen for changes to the file input field
            $input.on('change', function () {
                // Get the files that were selected
                const files = $input.get(0).files;

                // Clear the carousel
                $carouselInner.empty();
                $carouselIndicators.empty();

                // Add a carousel item for each selected file
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];

                    // Create a new carousel item
                    const $item = $('<div class="carousel-item"></div>');

                    // Create a new image element
                    const $img = $('<img class="d-block w-100" style="width: 565px; height: 375px;">');
                    const $indicatorImg = $('<img class="d-block w-100" style="width: 100px; height: 66.36px;">');

                    // Set the source of the image element to the selected file
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        $img.attr('src', e.target.result);
                        $indicatorImg.attr('src', e.target.result);
                    }
                    reader.readAsDataURL(file);

                    // Add the image to the carousel item
                    $item.append($img);

                    // Add the carousel item to the carousel
                    $carouselInner.append($item);

                    // Create a new carousel indicator
                    const $indicator = $('<li data-target="#imagesSlider"></li>');
                    $indicator.attr('data-slide-to', i);

                    // Add the image to the carousel indicator
                    $indicator.append($indicatorImg);


                    // Add the indicator to the indicator list
                    $carouselIndicators.append($indicator);
                }

                // Make the first item active
                $carouselInner.children().first().addClass('active');
                $carouselIndicators.children().first().addClass('active');
            });
        });
    </script>
@endsection
