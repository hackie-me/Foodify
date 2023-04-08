<div class="modal fade" id="modal-compose-email" tabindex="-1" role="dialog" aria-labelledby="modal-compose-email">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <p>Compose: </p>
                <form autocomplete="off" method="post" action="{{route('send-email')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="ms-form-group">
                        <input type="text" placeholder="To" class="form-control" name="to" value="" list="emailList">
                        <datalist id="emailList">
                            @foreach($contactList as $contact)
                                <option value="{{$contact['email']}}">{{$contact['email']}}</option>
                            @endforeach
                        </datalist>
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="Subject" class="form-control" name="subject" value="">
                    </div>
                    <div class="ms-form-group">
                        <label for="editor">Body</label>
                        <textarea id="editor" name="body" rows="15"></textarea>
                    </div>
                    <div class="ms-form-group">
                        <label for="editor">Attachments: </label>
                        <input class="form-control" type="file" name="file" multiple>
                    </div>
                    <button type="submit" class="btn btn-primary shadow-none">Send Email</button>
                    <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal" aria-label="Close">
                        Cancel
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
