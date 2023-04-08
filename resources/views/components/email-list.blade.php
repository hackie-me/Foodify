<li class="media ms-email clearfix {{$flag ? "pinned" : ""}}">
    <div class="ms-email-controls">
        <label class="ms-checkbox-wrap">
            <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
        </label> <i class="material-icons ms-pin-email">flag</i>
    </div>
    <div class="ms-email-img mr-3 ">
        <img src="{{$avatar}}" class="ms-img-round" alt="people">
    </div>
    <div class="media-body ms-email-details"><span class="ms-email-sender">{{$sender}}</span>
        <h6 class="ms-email-subject">{{$subject}}</h6>  <span class="ms-email-time">
            {!! $hasAttachment ? "<a href='#'><i class='material-icons''>attachment</i></a>" : ""!!}
            <span id="timeElapsed">Calculation not working</span> </span>
        <p class="ms-email-msg">{!! $message !!}</p>
    </div>
    <div class="dropdown">
        <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="material-icons">more_vert</i>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li class="ms-dropdown-list">
                <a class="media p-2" href="#">
                    <div class="media-body"><span>Mark as read</span>
                    </div>
                </a>
                <a class="media p-2 ms-pin-email" href="#">
                    <div class="media-body"><span>Flag</span>
                    </div>
                </a>
                <a class="media p-2" href="#">
                    <div class="media-body"><span>Archive</span>
                    </div>
                </a>
                <a class="media p-2" href="#">
                    <div class="media-body"><span>Delete</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</li>
{{--Script to calculate time elapsed--}}
<script>
    document.getElementById("timeElapsed").innerText = getTimeAgo("{{$time}}");

    function getTimeAgo(dateTimeString) {
        const dateTime = new Date(dateTimeString);
        const timeElapsed = Date.now() - dateTime.getTime();

        // Calculate the elapsed time in various units
        const SECOND = 1000;
        const MINUTE = 60 * SECOND;
        const HOUR = 60 * MINUTE;
        const DAY = 24 * HOUR;
        const elapsedDays = Math.floor(timeElapsed / DAY);
        const elapsedHours = Math.floor((timeElapsed % DAY) / HOUR);
        const elapsedMinutes = Math.floor((timeElapsed % HOUR) / MINUTE);
        const elapsedSeconds = Math.floor((timeElapsed % MINUTE) / SECOND);

        // Construct the "time ago" string based on the elapsed time
        let timeAgo = "";
        if (elapsedDays > 0) {
            timeAgo = `${elapsedDays} day${elapsedDays > 1 ? "s" : ""} ago`;
        } else if (elapsedHours > 0) {
            timeAgo = `${elapsedHours} hour${elapsedHours > 1 ? "s" : ""} ago`;
        } else if (elapsedMinutes > 0) {
            timeAgo = `${elapsedMinutes} minute${elapsedMinutes > 1 ? "s" : ""} ago`;
        } else {
            timeAgo = `${elapsedSeconds} second${elapsedSeconds > 1 ? "s" : ""} ago`;
        }

        return timeAgo;
    }

</script>
