{{--  Create Modal  --}}
<div class="modal fade" id="create-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('create_admin_users') }}" method="POST" class="needs-validation" novalidate autocomplete="off">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">First Name</label>
                            <input type="text" class="form-control" name="fName" id="fName"
                                placeholder="Enter first name" required />
                            <div class="invalid-feedback">Please enter a first name.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Last Name</label>
                            <input type="text" class="form-control" name="lName" id="lName" placeholder="Enter last name"
                                required />
                            <div class="invalid-feedback">Please enter a last name.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Enter email" required autocomplete="off" />

                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-email">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Enter password" required minlength="6" autocomplete="off"/>
                            <div class="invalid-feedback">Please enter a password with a minimum of 6 characters.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-role">Role</label>
                            <div class="input-group input-group-merge">
                                <select class="form-select" name="role" id="role"
                                    aria-label="Default select example" required>
                                    <option value="Admin" selected>Admin</option>
                                    <option value="Medical Specialist">Medical Specialist</option>
                                </select>
                                <div class="invalid-feedback">Please select a role.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </div>
            </form>
        </div>
    </div>
</div>
