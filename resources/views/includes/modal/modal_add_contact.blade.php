<div class="modal fade" id="modal-add-contact" tabindex="-1" role="dialog" aria-labelledby="modal-add-contact">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <p>Add New Contact: </p>
                <form method="post" action="{{route('email.add.contact')}}" enctype="multipart/form-data" id="add-contact">
                    @csrf
                    <input type="hidden" name="userid" value="{{ auth()->user()->id }}">
                    <div class="ms-form-group">
                        <label for="prefix">Prefix:</label>
                        <select id="prefix" name="prefix" required class="form-control">
                            <option value="">None</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Ms.">Ms.</option>
                            <option value="Dr.">Dr.</option>
                        </select>
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="First Name" class="form-control" name="first_name" value="">
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="Last Name" class="form-control" name="last_name" value="">
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="Middle Name" class="form-control" name="middle_name" value="">
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="Email" class="form-control" name="email" value="">
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="Phone" class="form-control" name="phone" value="">
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="Mobile" class="form-control" name="mobile" value="">
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="Company" class="form-control" name="company" value="">
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="Job Title" class="form-control" name="job_title" value="">
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="Nickname" class="form-control" name="nickname" value="">
                    </div>
                    <div class="ms-form-group">
                        <label for="suffix">Suffix:</label>
                        <select id="suffix" name="suffix" class="form-control">
                            <option value="">None</option>
                            <option value="Jr.">Jr.</option>
                            <option value="Sr.">Sr.</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
                            <option value="IV">IV</option>
                        </select>
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="Department" class="form-control" name="department" value="">
                    </div>
                    <div class="ms-form-group">
                        <input type="text" placeholder="Address" class="form-control" name="address" value="">
                    </div>
                    <button type="submit" class="btn btn-primary shadow-none">Save</button>
                    <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal" aria-label="Close">
                        Cancel
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
