{{--  Create Modal  --}}
<div class="modal fade" id="edit-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="">

                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">First Name</label>
                            <input type="text" class="form-control" placeholder="John" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Last Name</label>
                            <input type="text" class="form-control" placeholder="Doe" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-email">Email</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="john.doe@loopcare.com" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-role">Role</label>
                            <div class="input-group input-group-merge">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="Admin" selected>Admin</option>
                                    <option value="Medical Specialist">Medical Specialist</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
