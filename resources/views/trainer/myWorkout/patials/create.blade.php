<div class="modal fade" id="newWorkout" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-xl  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Activity</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    {{--  title  --}}
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Workout Title</label>
                                <input type="text" class="form-control" placeholder="Enter Workout Title" />
                            </div>
                        </div>
                        {{--  playlist  --}}
                        <div class="col-6">
                            <div class="d-flex gap-2 align-items-end mb-3">
                                <div class="w-75">
                                    <label class="form-label" for="basic-default-company">Playlist Name</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Select Playlist Name</option>
                                        <option value="1">Cardio</option>
                                        <option value="2">Weight Lifting</option>
                                    </select>
                                </div>
                                <div class="w-25">
                                    <button type="button" class="btn btn-main-sq btn-ui w-100"
                                        data-bs-target="#newPlaylist" data-bs-toggle="modal" data-bs-dismiss="modal">Add
                                        Playlist</button>
                                </div>
                            </div>
                        </div>

                        {{--  Category  --}}
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Category</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Category</option>
                                    <option value="1">Cardio</option>
                                    <option value="2">Weight Lifting</option>
                                </select>
                            </div>
                        </div>
                        {{-- SUB Category  --}}
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-company">Sub Category</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Sub Category</option>
                                    <option value="1">Cardio</option>
                                    <option value="2">Weight Lifting</option>
                                </select>
                            </div>
                        </div>
                        {{--  url  --}}
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Workout URL</label>
                                <input type="text" class="form-control" placeholder="Enter Workout URL" />
                            </div>
                        </div>

                        {{--  image  --}}
                        <div class="col-12 mb-3">
                            <label for="imageUpload1" class="form-label">Upload Image</label>
                            <input type="file" class="form-control image-upload" id="imageUpload1">
                            <img class="image-preview mt-3 border" src="#" alt="Image Preview" />
                        </div>

                        {{--  effective age  --}}
                        <div class="mb-3 col-12">
                            <label class="form-label">Effective Age</label>
                            <div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="" id="10-20">
                                    <label class="form-check-label" for="10-20">
                                        10-20
                                    </label>

                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="" id="21-30">
                                    <label class="form-check-label" for="21-30">
                                        21-30
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="" id="31-40">
                                    <label class="form-check-label" for="31-40">
                                        31-40
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="" id="41-50">
                                    <label class="form-check-label" for="41-50">
                                        41-50
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="" id="51-60">
                                    <label class="form-check-label" for="51-60">
                                        51-60
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="" id="61-70">
                                    <label class="form-check-label" for="61-70">
                                        61-70
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="" id="70">
                                    <label class="form-check-label" for="70">
                                        70+
                                    </label>
                                </div>
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


{{--  new playlist modal  --}}
<div class="modal fade" id="newPlaylist" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Create Playlist</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label class="form-label" for="basic-default-fullname">Playlist Name</label>
                    <input type="text" class="form-control" placeholder="Enter Playlist Name" />
                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-gray-sq btn-ui" data-bs-target="#newWorkout"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-main-sq btn-ui" data-bs-target="#newWorkout"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<button class="btn btn-primary" data-bs-target="#newWorkout" data-bs-toggle="modal">Open first modal</button>
