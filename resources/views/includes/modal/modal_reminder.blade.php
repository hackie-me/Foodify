<!-- Reminder Modal -->
<div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h5 class="modal-title has-icon text-white"> New Reminder</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="ms-form-group">
                        <label>Remind me about</label>
                        <textarea class="form-control" name="reminder"></textarea>
                    </div>
                    <div class="ms-form-group"> <span class="ms-option-name fs-14">Repeat Daily</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox"> <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ms-form-group">
                                <input type="text" class="form-control datepicker" name="reminder-date" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ms-form-group">
                                <select class="form-control" name="reminder-time">
                                    <option value="">12:00 pm</option>
                                    <option value="">1:00 pm</option>
                                    <option value="">2:00 pm</option>
                                    <option value="">3:00 pm</option>
                                    <option value="">4:00 pm</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
                </div>
            </form>
        </div>
    </div>
</div>
