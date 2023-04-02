<div class="modal fade" id="modal-10" tabindex="-1" role="dialog" aria-labelledby="modal-10">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <p>Compose: </p>
                <form method="post" action="{{url('/')}}/app/mail/send" enctype="multipart/form-data">
                    <div class="ms-form-group">
                        <input type="text" placeholder="To" class="form-control" name="news-letter" value="">
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="Subject" class="form-control" name="news-letter" value="">
                    </div>
                    <div class="ms-form-group">
                        <textarea id="editor" name="editor"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary shadow-none">Get Started</button>
                </form>
            </div>

        </div>
    </div>
</div>
