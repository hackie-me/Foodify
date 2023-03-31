@extends('main')

@push('title')
    <title>Dashboard</title>
@endpush

@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="db-header-title">Welcome, Hardik</h1>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
                <span class="ms-chart-label bg-black"><i class="material-icons">arrow_upward</i> 3.2%</span>
                <div class="ms-card-body media">
                    <div class="media-body">
                        <span class="black-text"><strong>Sells Graph</strong></span>
                        <h2>$8,451</h2>
                    </div>
                </div>
                <canvas id="line-chart"></canvas>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
                <span class="ms-chart-label bg-red"><i class="material-icons">arrow_downward</i> 4.5%</span>
                <div class="ms-card-body media">
                    <div class="media-body">
                        <span class="black-text"><strong>Total Visitors</strong></span>
                        <h2>3,973</h2>
                    </div>
                </div>
                <canvas id="line-chart-2"></canvas>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
                <span class="ms-chart-label bg-black"><i class="material-icons">arrow_upward</i> 12.5%</span>
                <div class="ms-card-body media">
                    <div class="media-body">
                        <span class="black-text"><strong>New Users</strong></span>
                        <h2>7,333</h2>
                    </div>
                </div>
                <canvas id="line-chart-3"></canvas>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
                <span class="ms-chart-label bg-red"><i class="material-icons">arrow_upward</i> 9.5%</span>
                <div class="ms-card-body media">
                    <div class="media-body">
                        <span class="black-text"><strong>Total Orders</strong></span>
                        <h2>48,973</h2>
                    </div>
                </div>
                <canvas id="line-chart-4"></canvas>
            </div>
        </div>
        <!-- Recent Orders Requested -->
        <div class="col-xl-6 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <div class="d-flex justify-content-between">
                        <div class="align-self-center align-left">
                            <h6>Recent Orders Requested</h6>
                        </div>
                        <button type="button" class="btn btn-primary">View All</button>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Food Item</th>
                                <th scope="col">Price</th>
                                <th scope="col">Product ID</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="ms-table-f-w"> <img src="{{url('/')}}/assets/img/foodify/pizza.jpg" alt="people"> Pizza </td>
                                <td>$19.99</td>
                                <td>67384917</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w"> <img src="{{url('/')}}/assets/img/foodify/french-fries.jpg" alt="people"> French Fries </td>
                                <td>$14.59</td>
                                <td>789393819</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w"> <img src="{{url('/')}}/assets/img/foodify/cereals.jpg" alt="people"> Multigrain Hot Cereal </td>
                                <td>$25.22</td>
                                <td>137893137</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w"> <img src="{{url('/')}}/assets/img/foodify/egg-sandwich.jpg" alt="people"> Fried Egg Sandwich </td>
                                <td>$11.23</td>
                                <td>235193138</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Monthly Revenue -->
        <div class="col-xl-6 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header new">
                    <h6>Monthly Revenue</h6>
                    <select class="form-control new" id="exampleSelect">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March </option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="1">June</option>
                        <option value="2">July</option>
                        <option value="3">August</option>
                        <option value="4">September</option>
                        <option value="5">October</option>
                        <option value="4">November</option>
                        <option value="5">December</option>
                    </select>
                </div>
                <div class="ms-panel-body">
                    <span class="progress-label"> <strong>Week 1</strong> </span>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <span class="progress-label"> <strong>Week 2</strong> </span>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <span class="progress-label"> <strong>Week 3</strong> </span>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    <span class="progress-label"> <strong>Week 4</strong> </span>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Food Orders -->
        <div class="col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Trending Orders</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="row">

                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="ms-card no-margin">
                                <div class="ms-card-img">
                                    <img src="{{url('/')}}/assets/img/foodify/food-5.jpg" alt="card_img">
                                </div>
                                <div class="ms-card-body">
                                    <div class="ms-card-heading-title">
                                        <h6>Meat Stew</h6>
                                        <span class="green-text"><strong>$25.00</strong></span>
                                    </div>

                                    <div class="ms-card-heading-title">
                                        <p>Orders <span class="red-text">15</span></p>
                                        <p>Income <span class="red-text">$175</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="ms-card no-margin">
                                <div class="ms-card-img">
                                    <img src="{{url('/')}}/assets/img/foodify/food-2.jpg" alt="card_img">
                                </div>
                                <div class="ms-card-body">
                                    <div class="ms-card-heading-title">
                                        <h6>Pancake</h6>
                                        <span class="green-text"><strong>$50.00</strong></span>
                                    </div>

                                    <div class="ms-card-heading-title">
                                        <p>Orders <span class="red-text">75</span></p>
                                        <p>Income <span class="red-text">$275</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="ms-card no-margin">
                                <div class="ms-card-img">
                                    <img src="{{url('/')}}/assets/img/foodify/food-4.jpg" alt="card_img">
                                </div>
                                <div class="ms-card-body">
                                    <div class="ms-card-heading-title">
                                        <h6>Burger</h6>
                                        <span class="green-text"><strong>$45.00</strong></span>
                                    </div>

                                    <div class="ms-card-heading-title">
                                        <p>Orders <span class="red-text">85</span></p>
                                        <p>Income <span class="red-text">$575</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="ms-card no-margin">
                                <div class="ms-card-img">
                                    <img src="{{url('/')}}/assets/img/foodify/food-3.jpg" alt="card_img">
                                </div>
                                <div class="ms-card-body">
                                    <div class="ms-card-heading-title">
                                        <h6>Saled</h6>
                                        <span class="green-text"><strong>$85.00</strong></span>
                                    </div>
                                    <div class="ms-card-heading-title">
                                        <p>Orders <span class="red-text">175</span></p>
                                        <p>Income <span class="red-text">$775</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- END/Food Orders -->
        <!-- Recent Orders Requested -->
        <div class="col-xl-7 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <div class="d-flex justify-content-between">
                        <div class="ms-header-text">
                            <h6>Order Timing Chart</h6>
                        </div>
                    </div>

                </div>
                <div class="ms-panel-body pt-0">
                    <div class="d-flex justify-content-between ms-graph-meta">
                        <ul class="ms-list-flex mt-3 mb-5">
                            <li>
                                <span>Total Orders</span>
                                <h3 class="ms-count">703,49</h3>
                            </li>
                            <li>
                                <span>New Orders</span>
                                <h3 class="ms-count">95,038</h3>
                            </li>
                            <li>
                                <span>Repeat Orders</span>
                                <h3 class="ms-count">28,387</h3>
                            </li>
                            <li>
                                <span>Cancel Orders</span>
                                <h3 class="ms-count">260</h3>
                            </li>
                        </ul>
                    </div>
                    <canvas id="youtube-subscribers"></canvas>
                </div>
            </div>
        </div>

        <!-- Favourite Products -->
        <div class="col-xl-5 col-md-12">
            <div class="ms-panel ms-widget ms-crypto-widget">
                <div class="ms-panel-header">
                    <h6>Favourite charts</h6>
                </div>
                <div class="ms-panel-body p-0">
                    <ul class="nav nav-tabs nav-justified has-gap px-4 pt-4" role="tablist">
                        <li role="presentation" class="fs-12"><a href="#btc" aria-controls="btc" class="active show" role="tab" data-toggle="tab"> Mon </a></li>
                        <li role="presentation" class="fs-12"><a href="#xrp" aria-controls="xrp" role="tab" data-toggle="tab"> Tue </a></li>
                        <li role="presentation" class="fs-12"><a href="#ltc" aria-controls="ltc" role="tab" data-toggle="tab"> Wed </a></li>
                        <li role="presentation" class="fs-12"><a href="#eth" aria-controls="eth" role="tab" data-toggle="tab"> Thu </a></li>
                        <li role="presentation" class="fs-12"><a href="#zec" aria-controls="zec" role="tab" data-toggle="tab"> Fri </a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active show fade in" id="btc">
                            <div class="table-responsive">
                                <table class="table table-hover thead-light">
                                    <thead>
                                    <tr>
                                        <th scope="col">Restaurant Names</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Orders</th>
                                        <th scope="col">Profit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Hunger House</td>
                                        <td>8528</td>
                                        <td class="ms-text-success">+17.24%</td>
                                        <td>7.65%</td>
                                    </tr>
                                    <tr>
                                        <td>Food Lounge</td>
                                        <td>4867</td>
                                        <td class="ms-text-danger">-12.24%</td>
                                        <td>9.12%</td>
                                    </tr>
                                    <tr>
                                        <td>Delizious</td>
                                        <td>7538</td>
                                        <td class="ms-text-success">+32.04%</td>
                                        <td>14.29%</td>
                                    </tr>
                                    <tr>
                                        <td>Netherfood</td>
                                        <td>1614</td>
                                        <td class="ms-text-danger">-20.75%</td>
                                        <td>12.25%</td>
                                    </tr>
                                    <tr>
                                        <td>Rusmiz</td>
                                        <td>7538</td>
                                        <td class="ms-text-success">+32.04%</td>
                                        <td>14.29%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="xrp">
                            <div class="table-responsive">
                                <table class="table table-hover thead-light">
                                    <thead>
                                    <tr>
                                        <th scope="col">Restaurant Name</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Orders</th>
                                        <th scope="col">Profit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Hunger House</td>
                                        <td>8528</td>
                                        <td class="ms-text-success">+17.24%</td>
                                        <td>7.65%</td>
                                    </tr>
                                    <tr>
                                        <td>Food Lounge</td>
                                        <td>4867</td>
                                        <td class="ms-text-danger">-12.24%</td>
                                        <td>9.12%</td>
                                    </tr>
                                    <tr>
                                        <td>Delizious</td>
                                        <td>7538</td>
                                        <td class="ms-text-success">+32.04%</td>
                                        <td>14.29%</td>
                                    </tr>
                                    <tr>
                                        <td>Netherfood</td>
                                        <td>1614</td>
                                        <td class="ms-text-danger">-20.75%</td>
                                        <td>12.25%</td>
                                    </tr>
                                    <tr>
                                        <td>Rusmiz</td>
                                        <td>7538</td>
                                        <td class="ms-text-success">+32.04%</td>
                                        <td>14.29%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="ltc">
                            <div class="table-responsive">
                                <table class="table table-hover thead-light">
                                    <thead>
                                    <tr>
                                        <th scope="col">Restaurant Name</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Orders</th>
                                        <th scope="col">Profit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Hunger House</td>
                                        <td>8528</td>
                                        <td class="ms-text-success">+17.24%</td>
                                        <td>7.65%</td>
                                    </tr>
                                    <tr>
                                        <td>Food Lounge</td>
                                        <td>4867</td>
                                        <td class="ms-text-danger">-12.24%</td>
                                        <td>9.12%</td>
                                    </tr>
                                    <tr>
                                        <td>Delizious</td>
                                        <td>7538</td>
                                        <td class="ms-text-success">+32.04%</td>
                                        <td>14.29%</td>
                                    </tr>
                                    <tr>
                                        <td>Netherfood</td>
                                        <td>1614</td>
                                        <td class="ms-text-danger">-20.75%</td>
                                        <td>12.25%</td>
                                    </tr>
                                    <tr>
                                        <td>Rusmiz</td>
                                        <td>7538</td>
                                        <td class="ms-text-success">+32.04%</td>
                                        <td>14.29%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="eth">
                            <div class="table-responsive">
                                <table class="table table-hover thead-light">
                                    <thead>
                                    <tr>
                                        <th scope="col">Restaurant Name</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Orders</th>
                                        <th scope="col">Profit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Hunger House</td>
                                        <td>8528</td>
                                        <td class="ms-text-success">+17.24%</td>
                                        <td>7.65%</td>
                                    </tr>
                                    <tr>
                                        <td>Food Lounge</td>
                                        <td>4867</td>
                                        <td class="ms-text-danger">-12.24%</td>
                                        <td>9.12%</td>
                                    </tr>
                                    <tr>
                                        <td>Delizious</td>
                                        <td>7538</td>
                                        <td class="ms-text-success">+32.04%</td>
                                        <td>14.29%</td>
                                    </tr>
                                    <tr>
                                        <td>Netherfood</td>
                                        <td>1614</td>
                                        <td class="ms-text-danger">-20.75%</td>
                                        <td>12.25%</td>
                                    </tr>
                                    <tr>
                                        <td>Rusmiz</td>
                                        <td>7538</td>
                                        <td class="ms-text-success">+32.04%</td>
                                        <td>14.29%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="zec">
                            <div class="table-responsive">
                                <table class="table table-hover thead-light">
                                    <thead>
                                    <tr>
                                        <th scope="col">Restaurant Name</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Orders</th>
                                        <th scope="col">Profit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Hunger House</td>
                                        <td>8528</td>
                                        <td class="ms-text-success">+17.24%</td>
                                        <td>7.65%</td>
                                    </tr>
                                    <tr>
                                        <td>Food Lounge</td>
                                        <td>4867</td>
                                        <td class="ms-text-danger">-12.24%</td>
                                        <td>9.12%</td>
                                    </tr>
                                    <tr>
                                        <td>Delizious</td>
                                        <td>7538</td>
                                        <td class="ms-text-success">+32.04%</td>
                                        <td>14.29%</td>
                                    </tr>
                                    <tr>
                                        <td>Netherfood</td>
                                        <td>1614</td>
                                        <td class="ms-text-danger">-20.75%</td>
                                        <td>12.25%</td>
                                    </tr>
                                    <tr>
                                        <td>Rusmiz</td>
                                        <td>7538</td>
                                        <td class="ms-text-success">+32.04%</td>
                                        <td>14.29%</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Favourite Products -->
            <!-- Total Earnings -->
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Total Earnings</h6>
                </div>
                <div class="ms-panel-body p-0">
                    <div class="ms-quick-stats">
                        <div class="ms-stats-grid">
                            <i class="fa fa-star"></i>
                            <p class="ms-text-dark">$8,033</p>
                            <span>Today</span>
                        </div>
                        <div class="ms-stats-grid">
                            <i class="fa fa-university"></i>
                            <p class="ms-text-dark">$3,039</p>
                            <span>Yesterday</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Earnings -->
        <!-- Recent Placed Orders< -->
        <div class="col-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>Recently Placed Orders</h6>
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover thead-primary">
                            <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Order Name</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Location</th>
                                <th scope="col">Order Status</th>
                                <th scope="col">Delivered Time</th>
                                <th scope="col">Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>French Fries</td>
                                <td>Jhon Leo</td>
                                <td>New Town</td>
                                <td><span class="badge badge-primary">Pending</span>
                                </td>
                                <td>10:05</td>
                                <td>$10</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mango Pie</td>
                                <td>Kristien</td>
                                <td>Old Town</td>
                                <td><span class="badge badge-dark">Cancelled</span>
                                </td>
                                <td>14:05</td>
                                <td>$9</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>FrieD Egg Sandwich</td>
                                <td>Jack Suit</td>
                                <td>Oxford Street</td>
                                <td><span class="badge badge-success">Delivered</span>
                                </td>
                                <td>12:05</td>
                                <td>$19</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Lemon Yogurt Parfait</td>
                                <td>Alesdro Guitto</td>
                                <td>Church hill</td>
                                <td><span class="badge badge-success">Delivered</span>
                                </td>
                                <td>12:05</td>
                                <td>$18</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Spicy Grill Sandwich</td>
                                <td>Jacob Sahwny</td>
                                <td>palace Road</td>
                                <td><span class="badge badge-success">Delivered</span>
                                </td>
                                <td>12:05</td>
                                <td>$21</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Chicken Sandwich</td>
                                <td>Peter Gill</td>
                                <td>Street 21</td>
                                <td><span class="badge badge-primary">Pending</span>
                                </td>
                                <td>12:05</td>
                                <td>$15</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Orders< -->

        <!-- New Restaurant Listing -->
        <div class="col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <h6>New Resturant Listings</h6>

                </div>
                <div class="ms-panel-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="ms-card no-margin">
                                <div class="ms-card-body">
                                    <div class="media fs-14">
                                        <div class="mr-2 align-self-center">
                                            <img src="{{url('/')}}/assets/img/foodify/customer-1.jpg" class="ms-img-round" alt="people">
                                        </div>
                                        <div class="media-body">
                                            <h6>Hunger House </h6>
                                            <div class="dropdown float-right">
                                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Sales</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Details</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Remove</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="fs-12 my-1 text-disabled">30 seconds ago</p>
                                        </div>

                                    </div>
                                    <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                        <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                                </div>
                                <div class="ms-card-img">
                                    <img src="{{url('/')}}/assets/img/foodify/food-1.jpg" alt="card_img">
                                </div>
                                <div class="ms-card-footer text-disabled d-flex">
                                    <div class="ms-card-options">
                                        <i class="material-icons">favorite</i> 982
                                    </div>
                                    <div class="ms-card-options">
                                        <i class="material-icons">comment</i> 785
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="ms-card no-margin">
                                <div class="ms-card-body">
                                    <div class="media fs-14">
                                        <div class="mr-2 align-self-center">
                                            <img src="{{url('/')}}/assets/img/foodify/customer-2.jpg" class="ms-img-round" alt="people">
                                        </div>
                                        <div class="media-body">
                                            <h6>Food Lounge</h6>
                                            <div class="dropdown float-right">
                                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Sales</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Details</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Remove</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="fs-12 my-1 text-disabled">30 seconds ago</p>
                                        </div>

                                    </div>
                                    <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                        <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                                </div>
                                <div class="ms-card-img">
                                    <img src="{{url('/')}}/assets/img/foodify/food-2.jpg" alt="card_img">
                                </div>
                                <div class="ms-card-footer text-disabled d-flex">
                                    <div class="ms-card-options">
                                        <i class="material-icons">favorite</i> 982
                                    </div>
                                    <div class="ms-card-options">
                                        <i class="material-icons">comment</i> 785
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="ms-card no-margin">
                                <div class="ms-card-body">
                                    <div class="media fs-14">
                                        <div class="mr-2 align-self-center">
                                            <img src="{{url('/')}}/assets/img/foodify/customer-6.jpg" class="ms-img-round" alt="people">
                                        </div>
                                        <div class="media-body">
                                            <h6>Delizious </h6>
                                            <div class="dropdown float-right">
                                                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Sales</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Details</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body">
                                                                <span>Remove</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p class="fs-12 my-1 text-disabled">30 seconds ago</p>
                                        </div>

                                    </div>
                                    <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                        <li class="ms-rating-item"> <i class="material-icons">star</i> </li>
                                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                                        <li class="ms-rating-item rated"> <i class="material-icons">star</i> </li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                                </div>
                                <div class="ms-card-img">
                                    <img src="{{url('/')}}/assets/img/foodify/food-3.jpg" alt="card_img">
                                </div>
                                <div class="ms-card-footer text-disabled d-flex">
                                    <div class="ms-card-options">
                                        <i class="material-icons">favorite</i> 982
                                    </div>
                                    <div class="ms-card-options">
                                        <i class="material-icons">comment</i> 785
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Support Tickets -->
        <div class="col-xl-12 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <div class="d-flex justify-content-between">
                        <div class="align-self-center align-left">
                            <h6>Recent Support Tickets</h6>
                        </div>
                        <a href="#" class="btn btn-primary"> View All</a>
                    </div>
                </div>
                <div class="ms-panel-body p-0">
                    <ul class="ms-list ms-feed ms-twitter-feed ms-recent-support-tickets">
                        <li class="ms-list-item">
                            <a href="#" class="media clearfix">
                                <img src="{{url('/')}}/assets/img/foodify/customer-4.jpg" class="ms-img-round ms-img-small" alt="This is another feature">
                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="ms-feed-user mb-0">Lorem ipsum dolor</h6>
                                        <span class="badge badge-success"> Open </span>
                                    </div> <span class="my-2 d-block"> <i class="material-icons">date_range</i> February 24, 2022</span>
                                    <p class="d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum. Duis quis convallis sapien ...</p>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="ms-feed-controls"> <span>
                            <i class="material-icons">chat</i> 16
                          </span>
                                            <span>
                            <i class="material-icons">attachment</i> 3
                          </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="ms-list-item">
                            <a href="#" class="media clearfix">
                                <img src="{{url('/')}}/assets/img/foodify/customer-1.jpg" class="ms-img-round ms-img-small" alt="This is another feature">
                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="ms-feed-user mb-0">Lorem ipsum dolor</h6>
                                        <span class="badge badge-success"> Open </span>
                                    </div> <span class="my-2 d-block"> <i class="material-icons">date_range</i> February 24, 2022</span>
                                    <p class="d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum. Duis quis convallis sapien ...</p>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="ms-feed-controls"> <span>
                            <i class="material-icons">chat</i> 11
                          </span>
                                            <span>
                            <i class="material-icons">attachment</i> 1
                          </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="ms-list-item">
                            <a href="#" class="media clearfix">
                                <img src="{{url('/')}}/assets/img/foodify/customer-7.jpg" class="ms-img-round ms-img-small" alt="This is another feature">
                                <div class="media-body">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="ms-feed-user mb-0">Lorem ipsum dolor</h6>
                                        <span class="badge badge-danger"> Closed </span>
                                    </div> <span class="my-2 d-block"> <i class="material-icons">date_range</i> February 24, 2022</span>
                                    <p class="d-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum. Duis quis convallis sapien ...</p>
                                    <div class="d-flex justify-content-between align-items-end">
                                        <div class="ms-feed-controls"> <span>
                            <i class="material-icons">chat</i> 21
                          </span>
                                            <span>
                            <i class="material-icons">attachment</i> 5
                          </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Recent Support Tickets -->
    </div>
@endsection

@section('page_scripts')
    <script src="{{url('/')}}/assets/js/Chart.bundle.min.js"></script>
    <script src="{{url('/')}}/assets/js/widgets.js"></script>
    <script src="{{url('/')}}/assets/js/clients.js"></script>
    <script src="{{url('/')}}/assets/js/Chart.Financial.js"></script>
    <script src="{{url('/')}}/assets/js/d3.v3.min.js"></script>
    <script src="{{url('/')}}/assets/js/topojson.v1.min.js"></script>
@endsection
