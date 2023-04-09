@php use PhpImap\Mailbox; @endphp
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
                @include('app.email.email-side-bar-menu')
            </div>
            <!-- Email Main -->
            <div class="tab-content ms-email-main">
                {{-- Inbox Tab --}}
                <div role="tabpanel" class="tab-pane fade in active show" id="tab-inbox">
                    <div class="ms-panel-header">
                        <h6>{{$folder_name}}</h6>
                        <p>You have {{$folder_count}} Unread Messages</p>
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
                        @foreach($messages as $mail)
                            <x-email-list subject="{{$mail['subject']}}" message="{{$mail['body_html']}}" sender="{{$mail['sender_name']}}" time="{{$mail['received_date']}}" hasAttachment="{{$mail['has_attachment']}}"></x-email-list>
                        @endforeach
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
                                                <a href="{{route('delete-contact', $contact['id'])}}"
                                                   onclick="confirm('Are you sure you want to delete this contact?')"
                                                   class="color-red">
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
