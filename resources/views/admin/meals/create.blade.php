<div class="modal fade" id="create-modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom pb-3">
                <h5 class="modal-title" id="modalScrollableTitle">Create Meal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="/create_meal" method="POST" class="needs-validation" enctype="multipart/form-data"
                    novalidate>
                    {{ csrf_field() }}
                    <div class="row">
                        {{--  meal  info  --}}
                        <h5>Meal Information</h5>
                        <div class="mb-3 col-6">
                            <label class="form-label">Meal Name</label>
                            <input type="text" class="form-control" id="meal_name" name="meal_name"
                                placeholder="Enter Meal Name" required>
                            <div class="invalid-feedback">Please enter a meal name.</div>
                        </div>
                        <div class="mb-3 col-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" aria-label="Default select example" id="category"
                                name="category" required>
                                <option value="Normal" selected>Normal</option>
                                <option value="Weight Gain">Weight Gain</option>
                                <option value="Weight Loss">Weight Loss</option>
                            </select>
                            <div class="invalid-feedback">Please select a category.</div>
                        </div>
                        <div class="mb-3 col-3">
                            <label class="form-label">Meal Time</label>
                            <select class="form-select" aria-label="Default select example" id="meal_time"
                                name="meal_time" required>
                                <option value="Breakfast" selected>Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Dinner">Dinner</option>
                                <option value="Snack">Snack</option>
                            </select>
                            <div class="invalid-feedback">Please select a meal time.</div>
                        </div>
                        <!-- Image -->
                        <div class="col-12 mb-3">
                            <label for="imageUpload1" class="form-label">Cover Image</label>
                            <input type="file" class="form-control image-upload" id="imageUpload1 meal_image"
                                name="meal_image" required>
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
                            <label class="form-label">Sort Description</label>
                            <input type="text" class="form-control" placeholder="Sweet potato with fried chicken"
                                id="short_description" name="short_description" required>
                            <div class="invalid-feedback">Please provide a short description.</div>
                        </div>

                        <hr>
                        {{--  Ingrediants  --}}
                        <h5>Ingredients</h5>
                        <div class="row g-2 px-2">
                            <div class="col-6 mb-3">
                                <label for="answer" class="form-label">Main Ingredients</label>
                                <div class="answers-container">
                                    <div class="d-flex gap-2 answers mb-2">
                                        <input type="text" class="form-control" placeholder="Enter Ingredient"
                                            id="ingredient" name="ingredient[]" required />
                                        <button type="button" class="btn btn-primary add-btn"
                                            style="padding:0.4375rem .7rem;"><i class='bx bx-plus'></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="text-danger err-limt d-none">You can only add up to 5 ingredients</p>
                        <hr>
                        {{--  nutrition  --}}
                        <h5>Nutrition Information</h5>
                        <div class="mb-3 col-2">
                            <label class="form-label">Serving Size</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="100" id="serving_size"
                                    name="serving_size" required />
                                <span class="input-group-text">g</span>
                            </div>
                        </div>
                        <div class="mb-3 col-2">
                            <label class="form-label">Total Calories</label>
                            <input type="text" class="form-control" placeholder="250" id="calories"
                                name="calories" required />
                        </div>
                        <div class="mb-3 col-2">
                            <label class="form-label">Total Fat</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="100" id="fat"
                                    name="fat" required />
                                <span class="input-group-text">g</span>
                            </div>
                        </div>
                        <div class="mb-3 col-2">
                            <label class="form-label">Total Sugar</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="5" id="sugar"
                                    name="sugar" required />
                                <span class="input-group-text">g</span>
                            </div>
                        </div>
                        <div class="mb-3 col-2">
                            <label class="form-label">Total Protien</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="5" id="protein"
                                    name="protein" required />
                                <span class="input-group-text">g</span>
                            </div>
                        </div>
                        <div class="mb-3 col-2">
                            <label class="form-label">Total Carbohydrate</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="5" id="carbohydrate"
                                    name="carbohydrate" required />
                                <span class="input-group-text">g</span>
                            </div>
                        </div>

                        <hr>
                        {{--  how to make  --}}
                        <h5>How to Make Meal</h5>
                        <div>
                            <label class="form-label">Making instructions</label>
                            <textarea class="form-control" placeholder="Enter instructions here" id="floatingTextarea2 instructions"
                                name="instructions" style="height: 100px" required></textarea>
                            <div class="invalid-feedback">Please provide making instructions.</div>
                        </div>

                    </div>
                    <div class="modal-footer mt-5 p-0">
                        <button type="button" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Meal</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
