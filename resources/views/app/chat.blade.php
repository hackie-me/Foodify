
@extends('main')

@push('title')
    <title>Dashboard</title>
@endpush

@section('main_content')
    <div class="row">
        <!-- Chat Sidebar -->
        <div class="col-xl-4 col-md-12">
            <div class="ms-panel ms-panel-fh">
                <div class="ms-panel-body py-3 px-0">
                    <div class="ms-chat-container">
                        <div class="ms-chat-header px-3">
                            <div class="ms-chat-user-container media clearfix">
                                <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                    <img src="{{url('/')}}/assets/img/foodify/customer-1.jpg" class="ms-img-round" alt="people">
                                </div>
                                <div class="media-body ms-chat-user-info mt-1">
                                    <h6>John Doe</h6>
                                    <a href="#" class="text-disabled has-chevron fs-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Available
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="ms-dropdown-list">
                                            <a class="media p-2" href="#">
                                                <div class="media-body"> <span>Busy</span>
                                                </div>
                                            </a>
                                            <a class="media p-2" href="#">
                                                <div class="media-body"> <span>Away</span>
                                                </div>
                                            </a>
                                            <a class="media p-2" href="#">
                                                <div class="media-body"> <span>Offline</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <form class="ms-form my-3" method="post">
                                <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                                    <input type="search" class="ms-form-input w-100" name="search" placeholder="Search for People and Groups" value=""> <i class="flaticon-search text-disabled"></i>
                                </div>
                            </form>
                        </div>
                        <div class="ms-chat-body">
                            <ul class="nav nav-tabs tabs-bordered d-flex nav-justified px-3" role="tablist">
                                <li role="presentation" class="fs-12"><a href="#chats-2" class="active show" role="tab" data-toggle="tab"> Chats </a>
                                </li>
                                <li role="presentation" class="fs-12"><a href="#groups-2" role="tab" data-toggle="tab"> Groups </a>
                                </li>
                                <li role="presentation" class="fs-12"><a href="#contacts-2" role="tab" data-toggle="tab"> Contacts </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active show fade in" id="chats-2">
                                    <ul class="ms-scrollable">
                                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                            <div class="ms-chat-status ms-status-away ms-has-new-msg ms-chat-img mr-3 align-self-center"> <span class="msg-count">3</span>
                                                <img src="{{url('/')}}/assets/img/foodify/customer-2.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>  <span class="ms-chat-time">2 Hours ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Archive</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Pin</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Delete</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                            <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-3.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>  <span class="ms-chat-time">3 Hours ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Archive</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Pin</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Delete</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat selected ms-deletable p-3 media clearfix">
                                            <div class="ms-chat-status ms-status-offline ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-4.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>  <span class="ms-chat-time">12 Hours ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Archive</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Pin</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Delete</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                            <div class="ms-chat-status ms-status-busy ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-5.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>  <span class="ms-chat-time">Yesterday</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Archive</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Pin</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Delete</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                            <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-6.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>  <span class="ms-chat-time">3 Days ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Archive</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Pin</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Delete</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                            <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-7.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>  <span class="ms-chat-time">3 Days ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Archive</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Pin</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Delete</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                                            <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-8.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>  <span class="ms-chat-time">3 Days ago</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <li class="ms-dropdown-list">
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Archive</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Pin</span>
                                                            </div>
                                                        </a>
                                                        <a class="media p-2" href="#">
                                                            <div class="media-body"> <span>Delete</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="groups-2">
                                    <ul class="ms-scrollable">
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-1.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                <ul class="ms-group-members clearfix mt-3 mb-0">
                                                    <li>
                                                        <img src="{{url('/')}}/assets/img/foodify/customer-2.jpg" alt="member">
                                                    </li>
                                                    <li>
                                                        <img src="{{url('/')}}/assets/img/foodify/customer-3.jpg" alt="member">
                                                    </li>
                                                    <li>
                                                        <img src="{{url('/')}}/assets/img/foodify/customer-4.jpg" alt="member">
                                                    </li>
                                                    <li class="ms-group-count">+ 12 more</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-7.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                <ul class="ms-group-members clearfix mt-3 mb-0">
                                                    <li>
                                                        <img src="{{url('/')}}/assets/img/foodify/customer-8.jpg" alt="member">
                                                    </li>
                                                    <li>
                                                        <img src="{{url('/')}}/assets/img/foodify/customer-9.jpg" alt="member">
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-10.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                                <ul class="ms-group-members clearfix mt-3 mb-0">
                                                    <li>
                                                        <img src="{{url('/')}}/assets/img/foodify/customer-1.jpg" alt="member">
                                                    </li>
                                                    <li>
                                                        <img src="{{url('/')}}/assets/img/foodify/customer-3.jpg" alt="member">
                                                    </li>
                                                    <li>
                                                        <img src="{{url('/')}}/assets/img/foodify/customer-2.jpg" alt="member">
                                                    </li>
                                                    <li class="ms-group-count">+ 4 more</li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="contacts-2">
                                    <ul class="ms-scrollable">
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-10.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-9.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-8.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-7.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-6.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                            </div>
                                        </li>
                                        <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                                            <div class="ms-chat-img mr-3 align-self-center">
                                                <img src="{{url('/')}}/assets/img/foodify/customer-5.jpg" class="ms-img-round" alt="people">
                                            </div>
                                            <div class="media-body ms-chat-user-info mt-1">
                                                <h6>John Doe</h6>
                                                <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i>
                                                </a>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chat Body -->
        <div class="col-xl-8 col-md-12">
            <div class="ms-panel ms-chat-conversations ms-widget">
                <div class="ms-panel-header">
                    <div class="ms-chat-header justify-content-between">
                        <div class="ms-chat-user-container media clearfix">
                            <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                                <img src="{{url('/')}}/assets/img/foodify/customer-3.jpg" class="ms-img-round" alt="people">
                            </div>
                            <div class="media-body ms-chat-user-info mt-1">
                                <h6>John Doe</h6>
                                <span class="text-disabled fs-12">
                      Active Now
                    </span>
                            </div>
                        </div>
                        <ul class="ms-list ms-list-flex ms-chat-controls">
                            <li data-toggle="tooltip" data-placement="top" title="Call"> <i class="material-icons">local_phone</i>
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="Video Call"> <i class="material-icons">videocam</i>
                            </li>
                            <li data-toggle="tooltip" data-placement="top" title="Add to Chat"> <i class="material-icons">person_add</i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ms-panel-body ms-scrollable">
                    <div class="ms-chat-bubble ms-chat-message ms-chat-outgoing media clearfix">
                        <div class="ms-chat-status ms-status-online ms-chat-img">
                            <img src="{{url('/')}}/assets/img/foodify/customer-3.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                            <div class="ms-chat-text">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                            </div>
                            <p class="ms-chat-time">10:33 pm</p>
                        </div>
                    </div>
                    <div class="ms-chat-bubble ms-chat-message media ms-chat-incoming clearfix">
                        <div class="ms-chat-status ms-status-online ms-chat-img">
                            <img src="{{url('/')}}/assets/img/foodify/customer-5.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                            <div class="ms-chat-text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                            </div>
                            <p class="ms-chat-time">10:33 pm</p>
                        </div>
                    </div>
                    <div class="ms-chat-bubble ms-chat-message ms-chat-outgoing media clearfix">
                        <div class="ms-chat-status ms-status-online ms-chat-img">
                            <img src="{{url('/')}}/assets/img/foodify/customer-3.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                            <div class="ms-chat-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eget orci ex.</p>
                            </div>
                            <p class="ms-chat-time">10:36 pm</p>
                        </div>
                    </div>
                    <div class="ms-chat-bubble ms-chat-message media ms-chat-incoming clearfix">
                        <div class="ms-chat-status ms-status-online ms-chat-img">
                            <img src="{{url('/')}}/assets/img/foodify/customer-5.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                            <div class="ms-chat-text">
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <p class="ms-chat-time">10:41 pm</p>
                        </div>
                    </div>
                    <div class="ms-chat-bubble ms-chat-message ms-chat-outgoing media clearfix">
                        <div class="ms-chat-status ms-status-online ms-chat-img">
                            <img src="{{url('/')}}/assets/img/foodify/customer-3.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                            <div class="ms-chat-text">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            </div>
                            <p class="ms-chat-time">10:44 pm</p>
                        </div>
                    </div>
                    <div class="ms-chat-bubble ms-chat-message ms-chat-incoming media clearfix">
                        <div class="ms-chat-status ms-status-online ms-chat-img">
                            <img src="{{url('/')}}/assets/img/foodify/customer-5.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                            <div class="ms-chat-text">
                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
                            </div>
                            <p class="ms-chat-time">11:01 pm</p>
                        </div>
                    </div>
                </div>
                <div class="ms-panel-footer pt-0">
                    <div class="ms-chat-textbox">
                        <ul class="ms-list-flex mb-0">
                            <li class="ms-chat-vn"><i class="material-icons">mic</i>
                            </li>
                            <li class="ms-chat-input">
                                <input type="text" name="msg" placeholder="Enter Message" value="">
                            </li>
                            <li>
                                <ul class="ms-chat-text-controls ms-list-flex">
                                    <li> <i class="material-icons">tag_faces</i>
                                    </li>
                                    <li> <i class="material-icons">attach_file</i>
                                    </li>
                                    <li> <i class="material-icons">camera_alt</i>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')

@endsection
