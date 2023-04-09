<button data-toggle="modal" data-target="#modal-compose-email"
        class="btn btn-primary w-100 mt-0 has-icon"><i class="flaticon-pencil"></i> Compose
    Email
</button>
<ul class="ms-list nav d-block ms-email-list border-0" role="tablist" aria-orientation="vertical">
    <li role="presentation" class="ms-list-item ms-email-label">Main</li>
    <li role="presentation" class="ms-list-item ms-active-email">
        <a href="{{route('get-folder-emails', ['inbox'])}}">
            <i class="material-icons ms-has-notification">mail</i> Inbox
        </a>
    </li>
    <li role="presentation" class="ms-list-item">
        <a href="{{route('get-folder-emails', ['archived'])}}"> <i
                class="material-icons">move_to_inbox</i> Archived
        </a>
    </li>
    <li role="presentation" class="ms-list-item">
        <a href="{{route('get-folder-emails', ['sent'])}}"> <i
                class="material-icons">send</i> Sent
        </a>
    </li>
    <li role="presentation" class="ms-list-item">
        <a href="{{route('get-folder-emails', ['spam'])}}"> <i
                class="material-icons">send</i> Spam
        </a>
    </li>
    <li role="presentation" class="ms-list-item">
        <a href="{{route('get-folder-emails', ['trash'])}}"> <i
                class="material-icons">delete</i> Trash
        </a>
    </li>
    <hr>
    <li role="presentation" class="ms-list-item ms-email-label">Others</li>
    <li role="presentation" class="ms-list-item">
        <a href="#tab-contacts" aria-controls="tab-contacts" role="tab" data-toggle="tab"> <i
                class="material-icons">contacts</i> Contacts
        </a>
    </li>
</ul>
