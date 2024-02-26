<div class="modal fade" id="create-modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom pb-3">
                <h5 class="modal-title" id="modalScrollableTitle">Create Goal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('goal.store-goal')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">First Name</label>
                            <input type="text" class="form-control" placeholder="John" id="firstName" name="firstName"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Last Name</label>
                            <input type="text" class="form-control" placeholder="Doe" id="lastName" name="lastName" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-email">Email</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="john.doe@loopcare.com" id="email" name="email" />
                            </div>
                        </div>
                        {{--  restricted diseases  --}}
                        <div class="mb-3 col-12">
                            <label class="form-label">Restricted Diseases</label>
                            <div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="" id="cholesterol">
                                    <label class="form-check-label" for="cholesterol">
                                        Cholesterol
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="" id="low-sugar">
                                    <label class="form-check-label" for="low-sugar">
                                        Low sugar
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="" id="high-sugar">
                                    <label class="form-check-label" for="high-sugar">
                                        High Sugar
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="low-pressure">
                                    <label class="form-check-label" for="low-pressure">
                                        Low pressure
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="high-pressure">
                                    <label class="form-check-label" for="high-pressure">
                                        High pressure
                                    </label>
                                </div>

                            </div>
                        </div>
                        {{--  short description  --}}
                        <div class="mb-3">
                            <label class="form-label">Short Description</label>
                            <input type="text" class="form-control" placeholder="Alternate between jogging and walking for 15 minutes."
                                required>
                            <div class="invalid-feedback">Please enter a short description.</div>
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
