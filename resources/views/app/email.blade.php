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
                <button data-toggle="modal" data-target="#modal-compose-email"
                        class="btn btn-primary w-100 mt-0 has-icon"><i class="flaticon-pencil"></i> Compose
                    Email
                </button>
                <ul class="ms-list nav d-block ms-email-list border-0" role="tablist" aria-orientation="vertical">
                    <li role="presentation" class="ms-list-item ms-email-label">Main</li>
                    <li role="presentation" class="ms-list-item ms-active-email">
                        <a href="#tab-inbox" aria-controls="tab-inbox" class="active show" role="tab" data-toggle="tab">
                            <i class="material-icons ms-has-notification">mail</i> Inbox <span>{{$countFlagged}}</span>
                        </a>
                    </li>
                    <li role="presentation" class="ms-list-item">
                        <a href="#tab-flagged" aria-controls="tab-flagged" role="tab" data-toggle="tab"> <i
                                class="material-icons">flag</i> Flagged <span>{{$countFlagged}}</span>
                        </a>
                    </li>
                    <li role="presentation" class="ms-list-item">
                        <a href="#tab-archived" aria-controls="tab-archived" role="tab" data-toggle="tab"> <i
                                class="material-icons">move_to_inbox</i> Archived <span>{{$countArchived}}</span>
                        </a>
                    </li>
                    <li role="presentation" class="ms-list-item">
                        <a href="#tab-sent" aria-controls="tab-sent" role="tab" data-toggle="tab"> <i
                                class="material-icons">send</i> Sent <span>{{$countSent}}</span>
                        </a>
                    </li>
                    <li role="presentation" class="ms-list-item">
                        <a href="#tab-trash" aria-controls="tab-trash" role="tab" data-toggle="tab"> <i
                                class="material-icons">delete</i> Trash <span>{{$countTrash}}</span>
                        </a>
                    </li>
                    <hr>
                    <li role="presentation" class="ms-list-item ms-email-label">Others</li>
                    <li role="presentation" class="ms-list-item">
                        <a href="#tab-contacts" aria-controls="tab-contacts" role="tab" data-toggle="tab"> <i
                                class="material-icons">contacts</i> Contacts <span>{{$countContacts}}</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Email Main -->
            <div class="tab-content ms-email-main">
                {{-- Inbox Tab --}}
                <div role="tabpanel" class="tab-pane fade in active show" id="tab-inbox">
                    <div class="ms-panel-header">
                        <h6>Inbox</h6>
                        <p>You have {{$countInbox}} Unread Messages</p>
                        <ul class="ms-email-pagination">
                            <li>50-100 of 985</li>
                            <li class="ms-email-pagination-item">
                                <a href="#" class="ms-email-pagination-link"> <i class="material-icons">keyboard_arrow_left</i>
                                </a>
                            </li>
                            <li class="ms-email-pagination-item ">
                                <a href="#" class="ms-email-pagination-link"> <i class="material-icons">keyboard_arrow_right</i>
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
                        </ul>
                    </div>
                    <!-- Email Content -->
                    <div class="ms-email-content">
                        <ul class="ms-scrollable">
                            @foreach($emails as $email)
                                <x-email-list sender="hardik@mail.com" subject="{{$email['subject']}}" message="{{$email['body']}}"
                                              time="{{$email['created_at']}}"/>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- Flagged Tab--}}
                <div role="tabpanel" class="tab-pane fade" id="tab-flagged">
                    <div class="ms-panel-header">
                        <h6>Flagged</h6>
                        <p>You have {{$countFlagged}} Unread Messages</p>
                        <ul class="ms-email-pagination">
                            <li>50-100 of 985</li>
                            <li class="ms-email-pagination-item">
                                <a href="#" class="ms-email-pagination-link"> <i class="material-icons">keyboard_arrow_left</i>
                                </a>
                            </li>
                            <li class="ms-email-pagination-item ">
                                <a href="#" class="ms-email-pagination-link"> <i class="material-icons">keyboard_arrow_right</i>
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
                        </ul>
                    </div>
                    <!-- Email Content -->
                    <div class="ms-email-content">
                        <ul class="ms-scrollable">
                            @foreach($emailsFlagged as $email)
                                <x-email-list sender="hardik@mail.com" subject="{{$email['subject']}}" message="{{$email['body']}}"
                                              time="{{$email['created_at']}}"/>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- Archived Tab--}}
                <div role="tabpanel" class="tab-pane fade" id="tab-archived">
                    <div class="ms-panel-header">
                        <h6>Archived</h6>
                        <p>You have {{$countArchived}} Unread Messages</p>
                        <ul class="ms-email-pagination">
                            <li>50-100 of 985</li>
                            <li class="ms-email-pagination-item">
                                <a href="#" class="ms-email-pagination-link"> <i class="material-icons">keyboard_arrow_left</i>
                                </a>
                            </li>
                            <li class="ms-email-pagination-item ">
                                <a href="#" class="ms-email-pagination-link"> <i class="material-icons">keyboard_arrow_right</i>
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
                        </ul>
                    </div>
                    <!-- Email Content -->
                    <div class="ms-email-content">
                        <ul class="ms-scrollable">
                            @foreach($emailsArchived as $email)
                                <x-email-list sender="hardik@mail.com" subject="{{$email['subject']}}" message="{{$email['body']}}"
                                              time="{{$email['created_at']}}"/>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- Sent Tab --}}
                <div role="tabpanel" class="tab-pane fade" id="tab-sent">
                    <div class="ms-panel-header">
                        <h6>Sent</h6>
                        <p>You have {{$countSent}} Unread Messages</p>
                        <ul class="ms-email-pagination">
                            <li>50-100 of 985</li>
                            <li class="ms-email-pagination-item">
                                <a href="#" class="ms-email-pagination-link"> <i class="material-icons">keyboard_arrow_left</i>
                                </a>
                            </li>
                            <li class="ms-email-pagination-item ">
                                <a href="#" class="ms-email-pagination-link"> <i class="material-icons">keyboard_arrow_right</i>
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
                        </ul>
                    </div>
                    <!-- Email Content -->
                    <div class="ms-email-content">
                        <ul class="ms-scrollable">
                            @foreach($emailsSent as $email)
                                <x-email-list sender="hardik@mail.com" subject="{{$email['subject']}}" message="{{$email['body']}}"
                                              time="{{$email['created_at']}}"/>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- Trash Tab --}}
                <div role="tabpanel" class="tab-pane fade" id="tab-trash">
                    <div class="ms-panel-header">
                        <h6>Trash</h6>
                        <p>You have {{$countTrash}} Unread Messages</p>
                        <ul class="ms-email-pagination">
                            <li>50-100 of 985</li>
                            <li class="ms-email-pagination-item">
                                <a href="#" class="ms-email-pagination-link"> <i class="material-icons">keyboard_arrow_left</i>
                                </a>
                            </li>
                            <li class="ms-email-pagination-item ">
                                <a href="#" class="ms-email-pagination-link"> <i class="material-icons">keyboard_arrow_right</i>
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
                        </ul>
                    </div>
                    <!-- Email Content -->
                    <div class="ms-email-content">
                        <ul class="ms-scrollable">
                            @foreach($emailsTrash as $email)
                                <x-email-list sender="hardik@mail.com" subject="{{$email['subject']}}" message="{{$email['body']}}"
                                              time="{{$email['created_at']}}"/>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{-- Contacts Tab --}}
                <div role="tabpanel" class="tab-pane fade" id="tab-contacts">
                    <div class="ms-panel-header">
                        <h6>Contacts</h6>
                        <ul class="ms-email-pagination">
                            <li class="ms-email-pagination-item">
                                <a href="#" data-toggle="modal" data-target="#modal-add-contact"
                                   class="ms-email-pagination-link">
                                    <i class="material-icons">person_add_alt</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- List Contacts -->
                    <div class="ms-email-content">
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                <table id="data-table-contacts" class="table w-100">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contactList as $contact)
                                        <tr>
                                            <td>{{$contact['name']}}</td>
                                            <td>{{$contact['email']}}</td>
                                            <td>{{$contact['phone']}}</td>
                                            <td>{{$contact['company']}}</td>
                                            <td>
                                                <a href="#" class="text-secondary">
                                                    <i class="material-icons">edit</i>
                                                </a>
                                                <a href="{{route('delete-contact', $contact['id'])}}" onclick="confirm('Are you sure you want to delete this contact?')" class="color-red">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- Including Compose Email Modal --}}
    @include('includes.modal.modal_compose_email')
    {{-- Including Add Contact Modal --}}
    @include('includes.modal.modal_add_contact')
@endsection
@section('page-scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });

        // Datatable for Contacts
        $('#data-table-contacts').DataTable();
    </script>
@endsection
