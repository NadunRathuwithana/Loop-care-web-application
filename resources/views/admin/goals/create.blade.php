<div class="modal fade" id="create-modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom pb-3">
                <h5 class="modal-title" id="modalScrollableTitle">Create Goal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/create_goal" method="POST" class="needs-validation" enctype="multipart/form-data"
                novalidate>
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <h5>Meal Information</h5>
                        <div class="mb-3 col-6">
                            <label class="form-label">Goal Name</label>
                            <input type="text" class="form-control" id="meal_name" name="goal_name"
                                placeholder="Enter Goal Name" required>
                            <div class="invalid-feedback">Please enter a goal name.</div>
                        </div>
                        <div class="mb-3 col-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" aria-label="Default select example" id="category"
                                name="category" required>
                                <option value="Walking" selected>Walking</option>
                                <option value="Runing">Runing</option>
                                <option value="Jumping">Jumping</option>
                            </select>
                            <div class="invalid-feedback">Please select a category.</div>
                        </div>
                        <div class="mb-3 col-3">
                            <label class="form-label">Goal Difficulty</label>
                            <select class="form-select" aria-label="Default select example" id="goal_difficulty"
                                name="goal_difficulty" required>
                                <option value="Easy" selected>Easy</option>
                                <option value="Medium">Medium</option>
                                <option value="Hard">Hard</option>
                            </select>
                            <div class="invalid-feedback">Please select a goal difficulty.</div>
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Target Calories</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="100" id="calories"
                                    name="calories" required />
                                <span class="input-group-text">cal</span>
                            </div>
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Goal Duration</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="100" id="goal_time"
                                    name="goal_time" required />
                                <span class="input-group-text">min</span>
                            </div>
                        </div>
                        <!-- Image -->
                        <div class="col-12 mb-3">
                            <label for="imageUpload1" class="form-label">Cover Image</label>
                            <input type="file" class="form-control image-upload" id="imageUpload1 goal_image"
                                name="goal_image" required>
                            <div class="invalid-feedback">Please upload a cover image.</div>
                            <img class="image-preview mt-3 border" src="#" alt="Image Preview" />
                        </div>

                        {{--  effective age  --}}
                        <div class="mb-3 col-12">
                            <label class="form-label">Effective Age</label>
                            <div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="10-20" id="10-20"
                                        name="age[]">
                                    <label class="form-check-label" for="10-20">
                                        10-20
                                    </label>

                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="21-30" id="21-30"
                                        name="age[]">
                                    <label class="form-check-label" for="21-30">
                                        21-30
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="31-40" id="31-40"
                                        name="age[]">
                                    <label class="form-check-label" for="31-40">
                                        31-40
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="41-50" id="41-50"
                                        name="age[]">
                                    <label class="form-check-label" for="41-50">
                                        41-50
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="51-60" id="51-60"
                                        name="age[]">
                                    <label class="form-check-label" for="51-60">
                                        51-60
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="61-70" id="61-70"
                                        name="age[]">
                                    <label class="form-check-label" for="61-70">
                                        61-70
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="70+" id="70+"
                                        name="age[]">
                                    <label class="form-check-label" for="70+">
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
                                    <input class="form-check-input" type="checkbox" value="cholesterol"
                                        id="cholesterol" name="restrict[]">
                                    <label class="form-check-label" for="cholesterol">
                                        Cholesterol
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="low-sugar" id="low-sugar"
                                        name="restrict[]">
                                    <label class="form-check-label" for="low-sugar">
                                        Low sugar
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="high-sugar"
                                        id="high-sugar" name="restrict[]">
                                    <label class="form-check-label" for="high-sugar">
                                        High Sugar
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="low-pressure"
                                        id="low-pressure" name="restrict[]">
                                    <label class="form-check-label" for="low-pressure">
                                        Low pressure
                                    </label>
                                </div>
                                <div class="form-check form-check-inline ">
                                    <input class="form-check-input" type="checkbox" value="high-pressure"
                                        id="high-pressure" name="restrict[]">
                                    <label class="form-check-label" for="high-pressure">
                                        High pressure
                                    </label>
                                </div>

                            </div>
                        </div>
                        {{--  short description  --}}
                        <div class="mb-3">
                            <label class="form-label">Short Description</label>
                            <input type="text" class="form-control"
                                placeholder="Alternate between jogging and walking for 15 minutes." id="description"
                                name="description" required>
                            <div class="invalid-feedback">Please enter a short description.</div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Add Goal</button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>
