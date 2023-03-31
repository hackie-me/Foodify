@extends('main')

@push('title')
    <title>Social Analytics</title>
@endpush

@section('main_content')
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Customer</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Social Activity</li>
                </ol>
            </nav>
        </div>
        <!-- Overview -->
        <div class="col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <div class="d-flex justify-content-between">
                        <div class="ms-header-text">
                            <h6>Social Activity</h6>
                            <p>Quick overview on your social media platforms</p>
                        </div>
                        <button type="button" class="btn btn-outline-primary ms-graph-metrics" name="button">Add New Account</button>
                    </div>
                </div>
                <div class="ms-panel-body pb-0">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="ms-card card-twitter ms-widget ms-infographics-widget">
                                <div class="ms-card-body media">
                                    <div class="media-body">
                                        <h6>Total Tweets</h6>
                                        <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 12,039</p>
                                        <p class="fs-12">48% From Last 24 Hours</p>
                                    </div>
                                </div> <i class="fab fa-twitter-square"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="ms-card card-linkedin ms-widget ms-infographics-widget">
                                <div class="ms-card-body media">
                                    <div class="media-body">
                                        <h6>Total Followers</h6>
                                        <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 3,819</p>
                                        <p class="fs-12">48% From Last 24 Hours</p>
                                    </div>
                                </div> <i class="fab fa-linkedin"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="ms-card card-facebook ms-widget ms-infographics-widget">
                                <div class="ms-card-body media">
                                    <div class="media-body">
                                        <h6>Total Likes</h6>
                                        <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 9,289</p>
                                        <p class="fs-12">48% From Last 24 Hours</p>
                                    </div>
                                </div> <i class="fab fa-facebook"></i>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="ms-card card-instagram ms-widget ms-infographics-widget">
                                <div class="ms-card-body media">
                                    <div class="media-body">
                                        <h6>Total Followers</h6>
                                        <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 7,658</p>
                                        <p class="fs-12">48% From Last 24 Hours</p>
                                    </div>
                                </div> <i class="fab fa-instagram"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header">
                    <div class=" d-flex justify-content-between">
                        <div class="ms-header-text">
                            <h6>Social Media Conversations</h6>
                            <p>Track your social media conversations</p>
                        </div>
                        <button type="button" class="btn btn-outline-primary ms-graph-metrics" name="button">Link New Source</button>
                    </div>
                </div>
                <div class="ms-panel-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col">Source</th>
                                <th scope="col" colspan="3">Conversation</th>
                                <th scope="col" colspan="2">Sessions</th>
                                <th scope="col">Avg. Rate</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Facebook</td>
                                <td class="w-25">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>76</td>
                                <td class="ms-text-success">+64</td>
                                <td>76</td>
                                <td class="ms-text-success">+64</td>
                                <td>9.12%</td>
                            </tr>
                            <tr>
                                <td>Twitter</td>
                                <td class="w-25">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>26</td>
                                <td class="ms-text-success">+10</td>
                                <td>26</td>
                                <td class="ms-text-success">+10</td>
                                <td>7.65%</td>
                            </tr>
                            <tr>
                                <td>Linkedin</td>
                                <td class="w-25">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>14</td>
                                <td class="ms-text-success">+7</td>
                                <td>14</td>
                                <td class="ms-text-success">+7</td>
                                <td>14.29%</td>
                            </tr>
                            <tr>
                                <td>Google +</td>
                                <td class="w-25">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>12</td>
                                <td class="ms-text-danger">-8</td>
                                <td>12</td>
                                <td class="ms-text-danger">-8</td>
                                <td>10.99%</td>
                            </tr>
                            <tr>
                                <td>Instagram</td>
                                <td class="w-25">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>4</td>
                                <td class="ms-text-success">+2</td>
                                <td>4</td>
                                <td class="ms-text-success">+2</td>
                                <td>22.35%</td>
                            </tr>
                            <tr>
                                <td>Youtube</td>
                                <td class="w-25">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>86</td>
                                <td class="ms-text-danger">-33</td>
                                <td>86</td>
                                <td class="ms-text-danger">-33</td>
                                <td>34.12%</td>
                            </tr>
                            <tr>
                                <td>Skype</td>
                                <td class="w-25">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>23</td>
                                <td class="ms-text-success">+48</td>
                                <td>23</td>
                                <td class="ms-text-success">+48</td>
                                <td>3.75%</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Conversations -->
        <div class="col-xl-4 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <h6>Social Media Followers</h6>
                </div>
                <div class="ms-panel-body p-0">
                    <div class="ms-social-media-followers">
                        <div class="ms-social-grid"> <i class="fab fa-linkedin-in bg-linkedin"></i>
                            <p class="ms-text-dark">8,033</p> <span>Followers</span>
                        </div>
                        <div class="ms-social-grid"> <i class="fab fa-twitter bg-twitter"></i>
                            <p class="ms-text-dark">8,039</p> <span>Followers</span>
                        </div>
                    </div>
                    <div class="ms-social-media-followers">
                        <div class="ms-social-grid"> <i class="fab fa-facebook-f bg-facebook"></i>
                            <p class="ms-text-dark">8,039</p> <span>Likes</span>
                        </div>
                        <div class="ms-social-grid"> <i class="fab fa-instagram bg-instagram"></i>
                            <p class="ms-text-dark">98,039</p> <span>Followers</span>
                        </div>
                    </div>
                    <div class="ms-social-media-followers">
                        <div class="ms-social-grid"> <i class="fab fa-youtube bg-youtube"></i>
                            <p class="ms-text-dark">8,039</p> <span>Subscribers</span>
                        </div>
                        <div class="ms-social-grid"> <i class="fab fa-google-plus-g bg-g-plus"></i>
                            <p class="ms-text-dark">98,039</p> <span>Followers</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Youtube Subscribers -->
        <div class="col-xl-6 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header header-mini">
                    <div class="d-flex justify-content-between">
                        <h6>Youtube Subscribers</h6>
                        <div class="btn-group btn-group-toggle ms-graph-metrics" data-toggle="buttons">
                            <label class="btn btn-sm btn-outline-primary active day">
                                <input type="radio" checked="">Day</label>
                            <label class="btn btn-sm btn-outline-primary month">
                                <input type="radio">Month</label>
                            <label class="btn btn-sm btn-outline-primary year">
                                <input type="radio">Year</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between ms-graph-meta">
                        <ul class="ms-list-flex">
                            <li> <span>Total Subscribers</span>
                                <h3 class="ms-count">85,390</h3>
                            </li>
                            <li> <span>New Subscribers</span>
                                <h3 class="ms-count">19,038</h3>
                            </li>
                            <li> <span>Unsubscribed</span>
                                <h3 class="ms-count">3,785</h3>
                            </li>
                        </ul>
                        <div class="ms-graph-labels"> <span class="ms-graph-regular"></span>
                            <p>Gained</p> <span class="ms-graph-decrease"></span>
                            <p>Lost</p>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-body">
                    <canvas id="youtube-subscribers"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="ms-panel">
                <div class="ms-panel-header new">
                    <h6>Top  Food Menu</h6>
                    <button type="button" class="btn btn-sm btn-primary">View All</button>
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
                                <td class="ms-table-f-w">
                                    <img src="../../assets/img/foodtech/pizza.jpg" alt="people">Pizza</td>
                                <td>$20</td>
                                <td>67384917</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w">
                                    <img src="../../assets/img/foodtech/french-fries.jpg" alt="people">French Fries</td>
                                <td>$14</td>
                                <td>789393819</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w">
                                    <img src="../../assets/img/foodtech/cereals.jpg" alt="people">Multigrain Hot Cereal</td>
                                <td>$25</td>
                                <td>137893137</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w">
                                    <img src="../../assets/img/foodtech/egg-sandwich.jpg" alt="people">Fried Egg Sandwich</td>
                                <td>$10</td>
                                <td>235193138</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w">
                                    <img src="../../assets/img/foodtech/pizza.jpg" alt="people">Garlic Bread</td>
                                <td>$17</td>
                                <td>235193138</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w">
                                    <img src="../../assets/img/foodtech/egg-sandwich.jpg" alt="people">Fried Egg Sandwich</td>
                                <td>$10</td>
                                <td>235193138</td>
                            </tr>
                            <tr>
                                <td class="ms-table-f-w">
                                    <img src="../../assets/img/foodtech/french-fries.jpg" alt="people">French Fries</td>
                                <td>$10</td>
                                <td>235193138</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Twitter Feed -->
        <div class="col-xl-4 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <h6>Twitter Feed</h6>
                </div>
                <div class="ms-panel-body p-0">
                    <ul class="ms-list ms-feed ms-twitter-feed">
                        <li class="ms-list-item">
                            <div class="media clearfix">
                                <img src="../../assets/img/foodtech/customer-4.jpg" class="ms-img-round ms-img-small" alt="people">
                                <div class="media-body">
                                    <h6 class="ms-feed-user">Rakhan Potik</h6>
                                    <p>@rakhan45</p>
                                    <p> <a href="#" class="btn-link">@zurak</a> Thanks for sharing this awesome article with us, it is truly inspiring and an eye opener</p>
                                    <p> <a href="#" class="btn-link">#design</a>
                                        <a href="#" class="btn-link">#article</a>
                                        <a href="#" class="btn-link">#interface</a>
                                    </p>
                                    <div class="ms-feed-controls"> <span>
                          <i class="material-icons">reply</i>
                        </span>
                                        <span>
                          <i class="material-icons">repeat</i> 1.9k
                        </span>
                                        <span>
                          <i class="material-icons">favorite</i> 2.5k
                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ms-list-item">
                            <div class="media clearfix">
                                <img src="../../assets/img/foodtech/customer-5.jpg" class="ms-img-round ms-img-small" alt="people">
                                <div class="media-body">
                                    <h6 class="ms-feed-user">Rakhan Potik</h6>
                                    <p>@rakhan45</p>
                                    <p> <a href="#" class="btn-link">@zurak</a> Thanks for sharing this awesome article with us, it is truly inspiring and an eye opener</p>
                                    <p> <a href="#" class="btn-link">#design</a>
                                        <a href="#" class="btn-link">#article</a>
                                        <a href="#" class="btn-link">#interface</a>
                                    </p>
                                    <div class="ms-feed-controls"> <span>
                          <i class="material-icons">reply</i>
                        </span>
                                        <span>
                          <i class="material-icons">repeat</i> 1.9k
                        </span>
                                        <span>
                          <i class="material-icons">favorite</i> 2.5k
                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ms-list-item">
                            <div class="media clearfix">
                                <img src="../../assets/img/foodtech/customer-6.jpg" class="ms-img-round ms-img-small" alt="people">
                                <div class="media-body">
                                    <h6 class="ms-feed-user">Rakhan Potik</h6>
                                    <p>@rakhan45</p>
                                    <p> <a href="#" class="btn-link">@zurak</a> Thanks for sharing this awesome article with us, it is truly inspiring and an eye opener</p>
                                    <p> <a href="#" class="btn-link">#design</a>
                                        <a href="#" class="btn-link">#article</a>
                                        <a href="#" class="btn-link">#interface</a>
                                    </p>
                                    <div class="ms-feed-controls"> <span>
                          <i class="material-icons">reply</i>
                        </span>
                                        <span>
                          <i class="material-icons">repeat</i> 1.9k
                        </span>
                                        <span>
                          <i class="material-icons">favorite</i> 2.5k
                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ms-list-item">
                            <div class="media clearfix">
                                <img src="../../assets/img/foodtech/customer-7.jpg" class="ms-img-round ms-img-small" alt="people">
                                <div class="media-body">
                                    <h6 class="ms-feed-user">Rakhan Potik</h6>
                                    <p>@rakhan45</p>
                                    <p> <a href="#" class="btn-link">@zurak</a> Thanks for sharing this awesome article with us, it is truly inspiring and an eye opener</p>
                                    <p> <a href="#" class="btn-link">#design</a>
                                        <a href="#" class="btn-link">#article</a>
                                        <a href="#" class="btn-link">#interface</a>
                                    </p>
                                    <div class="ms-feed-controls"> <span>
                          <i class="material-icons">reply</i>
                        </span>
                                        <span>
                          <i class="material-icons">repeat</i> 1.9k
                        </span>
                                        <span>
                          <i class="material-icons">favorite</i> 2.5k
                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="ms-list-item">
                            <div class="media clearfix">
                                <img src="../../assets/img/foodtech/customer-8.jpg" class="ms-img-round ms-img-small" alt="people">
                                <div class="media-body">
                                    <h6 class="ms-feed-user">Rakhan Potik</h6>
                                    <p>@rakhan45</p>
                                    <p> <a href="#" class="btn-link">@zurak</a> Thanks for sharing this awesome article with us, it is truly inspiring and an eye opener</p>
                                    <p> <a href="#" class="btn-link">#design</a>
                                        <a href="#" class="btn-link">#article</a>
                                        <a href="#" class="btn-link">#interface</a>
                                    </p>
                                    <div class="ms-feed-controls"> <span>
                          <i class="material-icons">reply</i>
                        </span>
                                        <span>
                          <i class="material-icons">repeat</i> 1.9k
                        </span>
                                        <span>
                          <i class="material-icons">favorite</i> 2.5k
                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Facebook Feed -->
        <div class="col-xl-4 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <h6>Facebook Feed</h6>
                </div>
                <div class="ms-panel-body p-0">
                    <ul class="ms-list ms-feed ms-facebook-feed">
                        <li class="ms-list-item">
                            <div class="media clearfix">
                                <img src="../../assets/img/foodtech/customer-1.jpg" class="ms-img-round ms-img-small" alt="people">
                                <div class="media-body">
                                    <h6 class="ms-feed-user">Rakhan Potik</h6>
                                    <p>24 January at 9:04 pm</p>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <img class="ms-fb-feed-img" src="../../assets/img/foodtech/food-2.jpg" alt="post">
                            <div class="d-flex justify-content-between">
                                <div class="ms-fb-post-meta"> <i class="material-icons">thumb_up</i>  <span>485 likes</span>
                                </div>
                                <div class="ms-fb-post-meta"> <span>48 comments</span>
                                </div>
                            </div>
                            <div class="ms-feed-controls"> <span>
                      <i class="material-icons">thumb_up</i> Like
                    </span>
                                <span>
                      <i class="material-icons">chat_bubble_outline</i> Comment
                    </span>
                                <span>
                      <i class="material-icons">share</i> Share
                    </span>
                            </div>
                        </li>
                        <li class="ms-list-item">
                            <div class="media clearfix">
                                <img src="../../assets/img/foodtech/customer-9.jpg" class="ms-img-round ms-img-small" alt="people">
                                <div class="media-body">
                                    <h6 class="ms-feed-user">Rakhan Potik</h6>
                                    <p>24 January at 9:04 pm</p>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                            <img class="ms-fb-feed-img" src="../../assets/img/foodtech/food-1.jpg" alt="post">
                            <div class="d-flex justify-content-between">
                                <div class="ms-fb-post-meta"> <i class="material-icons">thumb_up</i>  <span>485 likes</span>
                                </div>
                                <div class="ms-fb-post-meta"> <span>48 comments</span>
                                </div>
                            </div>
                            <div class="ms-feed-controls"> <span>
                      <i class="material-icons">thumb_up</i> Like
                    </span>
                                <span>
                      <i class="material-icons">chat_bubble_outline</i> Comment
                    </span>
                                <span>
                      <i class="material-icons">share</i> Share
                    </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Instagram Feed -->
        <div class="col-xl-4 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-header">
                    <h6>Instagram Feed</h6>
                </div>
                <div class="ms-panel-body p-0">
                    <ul class="ms-list ms-feed ms-instagram-feed">
                        <li class="ms-list-item">
                            <div class="media clearfix">
                                <img src="../../assets/img/foodtech/customer-10.jpg" class="ms-img-round ms-img-small" alt="people">
                                <div class="media-body">
                                    <h6 class="ms-feed-user">username24</h6>
                                </div>
                            </div>
                            <img class="ms-fb-feed-img" src="../../assets/img/foodtech/food-7.jpg" alt="post">
                            <div class="d-flex justify-content-between">
                                <div class="ms-feed-controls"> <i class="material-icons">favorite_border</i>
                                    <i class="material-icons">chat_bubble_outline</i>
                                </div>
                            </div>
                            <ul class="ms-group-members clearfix">
                                <li>
                                    <img src="../../assets/img/foodtech/customer-6.jpg" alt="member">
                                </li>
                                <li>
                                    <img src="../../assets/img/foodtech/customer-7.jpg" alt="member">
                                </li>
                                <li class="ms-group-count">
                                    <p>Liked By <span class="ms-text-dark medium">user5</span> and <span class="ms-text-dark medium">37 others</span>
                                    </p>
                                </li>
                            </ul>
                            <p> <span class="ms-text-dark medium">username24</span> website design in progress</p>
                            <p> <a href="#" class="btn-link">#design</a>  <a href="#" class="btn-link">#ui</a>  <a href="#" class="btn-link">#ux</a>  <a href="#" class="btn-link">#website</a>
                            </p>
                        </li>
                        <li class="ms-list-item">
                            <div class="media clearfix">
                                <img src="../../assets/img/foodtech/customer-5.jpg" class="ms-img-round ms-img-small" alt="people">
                                <div class="media-body">
                                    <h6 class="ms-feed-user">username24</h6>
                                </div>
                            </div>
                            <img class="ms-fb-feed-img" src="../../assets/img/foodtech/food-8.jpg" alt="post">
                            <div class="d-flex justify-content-between">
                                <div class="ms-feed-controls"> <i class="material-icons">favorite_border</i>
                                    <i class="material-icons">chat_bubble_outline</i>
                                </div>
                            </div>
                            <ul class="ms-group-members clearfix">
                                <li>
                                    <img src="../../assets/img/foodtech/customer-1.jpg" alt="member">
                                </li>
                                <li>
                                    <img src="../../assets/img/foodtech/customer-7.jpg" alt="member">
                                </li>
                                <li class="ms-group-count">
                                    <p>Liked By <span class="ms-text-dark medium">user5</span> and <span class="ms-text-dark medium">37 others</span>
                                    </p>
                                </li>
                            </ul>
                            <p> <span class="ms-text-dark medium">username24</span> website design in progress</p>
                            <p> <a href="#" class="btn-link">#design</a>  <a href="#" class="btn-link">#ui</a>  <a href="#" class="btn-link">#ux</a>  <a href="#" class="btn-link">#website</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')

@endsection
