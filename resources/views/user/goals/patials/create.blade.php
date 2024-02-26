<div class="modal fade" id="newActivity" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Activity</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">

                    <div class="row">
                        {{--  Category  --}}
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Goal Category</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select goal category</option>
                                    <option value="1">Running Goal</option>
                                    <option value="2">Walking Goal</option>
                                </select>
                            </div>
                        </div>

                        {{--  Goal Name  --}}
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Goal Name</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select goal name</option>
                                    <option value="1">Sprinter Starter (Beginner)l</option>
                                    <option value="2">Endurance Enthusiast (Easy)</option>
                                </select>
                            </div>
                        </div>

                        {{--  completed  --}}
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Distance</label>
                                <div class="input-group mb-3 border rounded">
                                    <input type="text" class="form-control border-0" placeholder="Enter distance" />
                                    <span class="input-group-text rounded-0 text-secondary bg-transparent border-0" id="basic-addon2">Steps</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end modal-footer pb-0">
                        <button type="button" class="btn btn-gray-sq btn-ui"data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-main-sq btn-ui">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
