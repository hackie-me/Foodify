@extends('main')

@push('title')
    <title>Invoice</title>
@endpush

@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Invoice List</a>
                    </li>
                </ol>
            </nav>
            <div class="col-12">
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>Invoice List</h6>
                    </div>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover thead-primary">
                                <thead>
                                <tr>
                                    <th scope="col">Invoice ID</th>
                                    <th scope="col">Order Name</th>
                                    <th scope="col">Order Id</th>
                                    <th scope="col">Invoice Date</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total Bill</th>
                                    <th scope="col">Send Invoice</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">15451</th>
                                    <td>French Fries</td>
                                    <td>001</td>
                                    <td>19/02/2022</td>
                                    <td>10</td>
                                    <td>$10</td>
                                    <td><a href='#'><i class='fas fa-paper-plane text-success'></i></a>  <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">15452</th>
                                    <td>Mango Pie</td>
                                    <td>004</td>
                                    <td>9/02/2022</td>
                                    <td>14</td>
                                    <td>$9</td>
                                    <td><a href='#'><i class='fas fa-paper-plane text-success'></i></a>  <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">45263</th>
                                    <td>FrieD Egg Sandwich</td>
                                    <td>003</td>
                                    <td>18/02/2022</td>
                                    <td>12</td>
                                    <td>$19</td>
                                    <td><a href='#'><i class='fas fa-paper-plane text-success'></i></a>  <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">45865</th>
                                    <td>Lemon Yogurt Parfait</td>
                                    <td>005</td>
                                    <td>16/02/2022</td>
                                    <td>05</td>
                                    <td>$18</td>
                                    <td><a href='#'><i class='fas fa-paper-plane text-success'></i></a>  <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">56652</th>
                                    <td>Spicy Grill Sandwich</td>
                                    <td>014</td>
                                    <td>17/02/2022</td>
                                    <td>15</td>
                                    <td>$21</td>
                                    <td><a href='#'><i class='fas fa-paper-plane text-success'></i></a>  <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">65845</th>
                                    <td>Chicken Sandwich</td>
                                    <td>017</td>
                                    <td>14/02/2022</td>
                                    <td>120</td>
                                    <td>$15</td>
                                    <td><a href='#'><i class='fas fa-paper-plane text-success'></i></a>  <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">65425</th>
                                    <td>Veg Sandwich</td>
                                    <td>045</td>
                                    <td>13/02/2022</td>
                                    <td>2</td>
                                    <td>$15</td>
                                    <td><a href='#'><i class='fas fa-paper-plane text-success'></i></a>  <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">54556</th>
                                    <td>Cake</td>
                                    <td>033</td>
                                    <td>11/02/2022</td>
                                    <td>15</td>
                                    <td>$15</td>
                                    <td><a href='#'><i class='fas fa-paper-plane text-success'></i></a>  <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">45556</th>
                                    <td>Chicken Fried</td>
                                    <td>077</td>
                                    <td>12/02/2022</td>
                                    <td>06</td>
                                    <td>$15</td>
                                    <td><a href='#'><i class='fas fa-paper-plane text-success'></i></a>  <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">55856</th>
                                    <td>Nachos</td>
                                    <td>868</td>
                                    <td>10/02/2022</td>
                                    <td>08</td>
                                    <td>$15</td>
                                    <td><a href='#'><i class='fas fa-paper-plane text-success'></i></a>  <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">36456</th>
                                    <td>Spaghetti</td>
                                    <td>777</td>
                                    <td>20/02/2022</td>
                                    <td>09</td>
                                    <td>$15</td>
                                    <td><a href='#'><i class='fas fa-paper-plane text-success'></i></a>  <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">78456</th>
                                    <td>Pastries</td>
                                    <td>555</td>
                                    <td>21/02/2022</td>
                                    <td>14</td>
                                    <td>$15</td>
                                    <td><a href='#'><i class='fas fa-paper-plane text-success'></i></a>  <a href='a'><i class='far fa-trash-alt ms-text-danger'></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')

@endsection
