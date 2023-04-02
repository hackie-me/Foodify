@extends('main')

@push('title')
    <title>Foodify Email Client</title>
@endpush

@push('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
@endpush

@section('main_content')
    <div class="ms-panel ms-email-panel">
        <div class="ms-panel-body p-0">
            <div class="ms-email-aside">
                <button class="btn btn-primary w-100 mt-0 has-icon" data-toggle="modal" data-target="#modal-10"><i
                        class="flaticon-pencil"></i> Compose Email
                </button>
                <ul class="ms-list ms-email-list">
                    <li class="ms-list-item ms-email-label">Main</li>
                    <li class="ms-list-item ms-active-email">
                        <a href="#"> <i class="material-icons ms-has-notification">mail</i> Inbox <span>32</span>
                        </a>
                    </li>
                    <li class="ms-list-item">
                        <a href="#"> <i class="material-icons">flag</i> Flagged <span>12</span>
                        </a>
                    </li>
                    <li class="ms-list-item">
                        <a href="#"> <i class="material-icons">chat</i> Spam <span>17</span>
                        </a>
                    </li>
                    <li class="ms-list-item">
                        <a href="#"> <i class="material-icons">drafts</i> Drafts <span>22</span>
                        </a>
                    </li>
                    <li class="ms-list-item">
                        <a href="#"> <i class="material-icons">send</i> Sent <span>51</span>
                        </a>
                    </li>
                    <li class="ms-list-item">
                        <a href="#"> <i class="material-icons">delete</i> Trash <span>33</span>
                        </a>
                    </li>
                </ul>
                <ul class="ms-list ms-email-list">
                    <li class="ms-list-item ms-email-label">Folders</li>
                    <li class="ms-list-item"><a href="#"><i class="material-icons">folder</i> Social Media
                            <span>123</span> </a>
                    </li>
                    <li class="ms-list-item"><a href="#"><i class="material-icons">folder</i> Promotions
                            <span>175</span> </a>
                    </li>
                    <li class="ms-list-item"><a href="#"><i class="material-icons">folder</i> Updates <span>12</span>
                        </a>
                    </li>
                </ul>
                <ul class="ms-list ms-email-list bb-0">
                    <li class="ms-list-item ms-email-label">Others</li>
                    <li class="ms-list-item">
                        <a href="#"> <i class="material-icons">local_phone</i> Phone Calls <span>2</span>
                        </a>
                    </li>
                    <li class="ms-list-item">
                        <a href="#"> <i class="material-icons">contacts</i> Contacts <span>233</span>
                        </a>
                    </li>
                    <li class="ms-list-item">
                        <a href="#"> <i class="material-icons">group</i> Groups <span>8</span>
                        </a>
                    </li>

                </ul>
                <div class="ms-email-config">
                    <div class="progress progress-tiny">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0">54.27 GB (25%) of 150 GB used</p> <a href="#">Manage Storage</a>
                </div>
            </div>
            <!-- Email Main -->
            <div class="ms-email-main">
                <div class="ms-panel-header">
                    <h6>Inbox</h6>
                    <p>You have 17 Unread Messages</p>
                    <ul class="ms-email-pagination">
                        <li>50-100 of 985</li>
                        <li class="ms-email-pagination-item">
                            <a href="#" class="ms-email-pagination-link"> <i
                                    class="material-icons">keyboard_arrow_left</i>
                            </a>
                        </li>
                        <li class="ms-email-pagination-item ">
                            <a href="#" class="ms-email-pagination-link"> <i
                                    class="material-icons">keyboard_arrow_right</i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ms-email-header">
                    <ul class="ms-email-options">
                        <li>
                            <label class="ms-checkbox-wrap">
                                <input type="checkbox" class="ms-email-check-all" value=""> <i
                                    class="ms-checkbox-check"></i>
                            </label>
                            <div class="dropdown"><a href="#" class="has-chevron" data-toggle="dropdown"
                                                     aria-haspopup="true" aria-expanded="false">
                                    Select
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="ms-dropdown-list">
                                        <a class="media p-2" href="#">
                                            <div class="media-body"><span>Mark as read</span>
                                            </div>
                                        </a>
                                        <a class="media p-2" href="#">
                                            <div class="media-body"><span>Flag</span>
                                            </div>
                                        </a>
                                        <a class="media p-2" href="#">
                                            <div class="media-body"><span>Delete</span>
                                            </div>
                                        </a>
                                        <a class="media p-2" href="#">
                                            <div class="media-body"><span>Archive</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="ms-email-options">
                        <li>
                            <a href="#" class="text-disabled"> <i class="material-icons">refresh</i> Refresh</a>
                        </li>
                        <li>
                            <a href="#" class="text-disabled"> <i class="material-icons">local_offer</i> Tags</a>
                        </li>
                        <li>
                            <a href="#" class="text-disabled"> <i class="material-icons">folder</i> Folders</a>
                        </li>
                    </ul>
                </div>
                <!-- Email Content -->
                <div class="ms-email-content">
                    <ul class="ms-scrollable" style="height: 100vh">
                        <x-email-list sender="hardik" subject="something" message="heello" time="2023-04-02 04:40:55"
                                      flag="true" hasAttachment="true"/>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Including Compose Email Modal --}}
    @include('includes.modal.modal_compose_email')

@endsection

@section('page-scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection
