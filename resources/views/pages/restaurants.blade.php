@extends('main')

@push('title')
    <title>Orders</title>
@endpush

@section('main_content')
    <div class="row">

        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Restaurant List</li>

                </ol>
            </nav>
            <!-- Active Orders Graph -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="ms-panel ms-panel-fh">
                        <div class="ms-panel-header">
                            <h6>Restaurant wise sales</h6>

                        </div>
                        <div class="ms-panel-body">

                            <div class="row">
                                <div class="col-xl-4 col-md-4">
                                    <div class="ms-graph-labels column-direction">
                                        <div class="ms-chart-no-label">
                                            <span class="bg-success"></span>
                                            <p>$9,348,319</p>
                                        </div>
                                        <div class="ms-chart-no-label">
                                            <span class="bg-primary"></span>
                                            <p>$4,344,316</p>
                                        </div>
                                        <div class="ms-chart-no-label">
                                            <span class="bg-warning"></span>
                                            <p>$518,513</p>
                                        </div>
                                        <div class="ms-chart-no-label">
                                            <span class="bg-danger"></span>
                                            <p>$348,319</p>
                                        </div>
                                        <div class="ms-chart-no-label">
                                            <span class="bg-secondary"></span>
                                            <p>$3,416,139</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-md-8">
                                    <canvas id="pie-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header new">
                            <h6>Top Food Menu</h6>
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
                                        <td class="ms-table-f-w"><img src="../assets/img/foodtech/pizza.jpg"
                                                                      alt="people"> Pizza
                                        </td>
                                        <td>$20</td>
                                        <td>67384917</td>
                                    </tr>
                                    <tr>
                                        <td class="ms-table-f-w"><img src="../assets/img/foodtech/french-fries.jpg"
                                                                      alt="people"> French Fries
                                        </td>
                                        <td>$14</td>
                                        <td>789393819</td>
                                    </tr>
                                    <tr>
                                        <td class="ms-table-f-w"><img src="../assets/img/foodtech/cereals.jpg"
                                                                      alt="people"> Multigrain Hot Cereal
                                        </td>
                                        <td>$25</td>
                                        <td>137893137</td>
                                    </tr>
                                    <tr>
                                        <td class="ms-table-f-w"><img src="../assets/img/foodtech/egg-sandwich.jpg"
                                                                      alt="people"> Fried Egg Sandwich
                                        </td>
                                        <td>$10</td>
                                        <td>235193138</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header">
                            <h6>Invoice List</h6>
                        </div>
                        <div class="ms-panel-body">

                            <div class="table-responsive">
                                <table class="table table-hover thead-primary">
                                    <thead>
                                    <tr>
                                        <th scope="col">Restaurant ID</th>
                                        <th scope="col">Restaurant Name</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Ratings</th>
                                        <th scope="col">Joining Date</th>

                                        <th scope="col">Restaurant Sale(%)</th>
                                        <th scope="col">Send / Edit / Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">15451</th>
                                        <td>Delizus</td>
                                        <td> New York</td>
                                        <td>
                                            <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                <li class="ms-rating-item"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                            </ul>
                                        </td>
                                        <td>12/10/19</td>
                                        <td>90</td>
                                        <td><a href='#'><i
                                                    class='fas fa-paper-plane text-secondary text-success'></i></a>
                                            <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                                            <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15452</th>
                                        <td>Lumina</td>
                                        <td> New York</td>
                                        <td>
                                            <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                <li class="ms-rating-item"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                            </ul>
                                        </td>

                                        <td>20/9/19</td>
                                        <td>99</td>
                                        <td><a href='#'><i
                                                    class='fas fa-paper-plane text-secondary text-success'></i></a>
                                            <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                                            <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">45263</th>
                                        <td>Food Loung</td>
                                        <td> New York</td>
                                        <td>
                                            <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                <li class="ms-rating-item"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                            </ul>
                                        </td>

                                        <td>15/10/19</td>
                                        <td>95</td>
                                        <td><a href='#'><i
                                                    class='fas fa-paper-plane text-secondary text-success'></i></a>
                                            <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                                            <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">45865</th>
                                        <td>Hungry House</td>
                                        <td> New York</td>
                                        <td>
                                            <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                <li class="ms-rating-item"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                            </ul>
                                        </td>

                                        <td>21/11/19</td>
                                        <td>88</td>
                                        <td><a href='#'><i
                                                    class='fas fa-paper-plane text-secondary text-success'></i></a>
                                            <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                                            <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">56652</th>
                                        <td>Luncheon</td>
                                        <td> New York</td>
                                        <td>
                                            <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                <li class="ms-rating-item"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                            </ul>
                                        </td>

                                        <td>12/11/19</td>
                                        <td>81</td>
                                        <td><a href='#'><i
                                                    class='fas fa-paper-plane text-secondary text-success'></i></a>
                                            <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                                            <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">65845</th>
                                        <td>Spice 'n' Steam</td>
                                        <td> New York</td>
                                        <td>
                                            <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                <li class="ms-rating-item"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                            </ul>
                                        </td>

                                        <td>20/10/19</td>
                                        <td>91</td>
                                        <td><a href='#'><i
                                                    class='fas fa-paper-plane text-secondary text-success'></i></a>
                                            <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                                            <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">65425</th>
                                        <td>Tomato</td>
                                        <td> New York</td>
                                        <td>
                                            <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                <li class="ms-rating-item"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                            </ul>
                                        </td>

                                        <td>12/10/19</td>
                                        <td>77</td>
                                        <td><a href='#'><i
                                                    class='fas fa-paper-plane text-secondary text-success'></i></a>
                                            <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                                            <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">54556</th>
                                        <td>Bardojo</td>
                                        <td> New York</td>
                                        <td>
                                            <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                <li class="ms-rating-item"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                            </ul>
                                        </td>

                                        <td>12/11/19</td>
                                        <td>78</td>
                                        <td><a href='#'><i
                                                    class='fas fa-paper-plane text-secondary text-success'></i></a>
                                            <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                                            <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">45556</th>
                                        <td>Deliceiux</td>
                                        <td> New York</td>
                                        <td>
                                            <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                <li class="ms-rating-item"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                            </ul>
                                        </td>

                                        <td>22/10/19</td>
                                        <td>88</td>
                                        <td><a href='#'><i
                                                    class='fas fa-paper-plane text-secondary text-success'></i></a>
                                            <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                                            <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">55856</th>
                                        <td>Food Forest</td>
                                        <td> New York</td>
                                        <td>
                                            <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                <li class="ms-rating-item"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                            </ul>
                                        </td>

                                        <td>12/10/19</td>
                                        <td>75</td>
                                        <td><a href='#'><i
                                                    class='fas fa-paper-plane text-secondary text-success'></i></a>
                                            <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                                            <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">36456</th>
                                        <td>Food Bella</td>
                                        <td> New York</td>
                                        <td>
                                            <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                <li class="ms-rating-item"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                            </ul>
                                        </td>

                                        <td>18/11/19</td>
                                        <td>90</td>
                                        <td><a href='#'><i
                                                    class='fas fa-paper-plane text-secondary text-success'></i></a>
                                            <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                                            <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">78456</th>
                                        <td>Red Chilly</td>
                                        <td> New York</td>
                                        <td>
                                            <ul class="ms-star-rating rating-fill rating-circle ratings-new">
                                                <li class="ms-rating-item"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                                <li class="ms-rating-item rated"><i class="material-icons">star</i></li>
                                            </ul>
                                        </td>

                                        <td>12/10/19</td>
                                        <td>85</td>
                                        <td><a href='#'><i
                                                    class='fas fa-paper-plane text-secondary text-success'></i></a>
                                            <a href='#'><i class='fas fa-pencil-alt text-secondary'></i></a>
                                            <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a></td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('page_scripts')
    <script src="{{url('/')}}/assets/js/Chart.bundle.min.js"></script>
    <script src="{{url('/')}}/assets/js/Resturant.js"></script>
@endsection
