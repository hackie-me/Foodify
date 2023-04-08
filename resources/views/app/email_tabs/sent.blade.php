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
            <x-email-list sender="hardik@mail.com" subject="{{$email['subject']}}"
                          message="{{$email['body']}}"
                          time="{{$email['created_at']}}"/>
        @endforeach
    </ul>
</div>
