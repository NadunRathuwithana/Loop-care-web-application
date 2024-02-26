<div class="modal fade" id="create-modal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom pb-3">
                <h5 class="modal-title" id="modalScrollableTitle">Create Meal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="" class="needs-validation" novalidate>
                    <div class="row">
                        {{--  meal  info  --}}
                        <h5>Meal Information</h5>
                        <div class="mb-3 col-6">
                            <label class="form-label">Meal Name</label>
                            <input type="text" class="form-control" placeholder="Enter Meal Name" required>
                            <div class="invalid-feedback">Please enter a meal name.</div>
                        </div>
                        <div class="mb-3 col-3">
                            <label class="form-label">Category</label>
                            <select class="form-select" aria-label="Default select example" required>
                                <option value="Normal" selected>Normal</option>
                                <option value="Weight Gain">Weight Gain</option>
                                <option value="Weight Loss">Weight Loss</option>
                            </select>
                            <div class="invalid-feedback">Please select a category.</div>
                        </div>
                        <div class="mb-3 col-3">
                            <label class="form-label">Meal Time</label>
                            <select class="form-select" aria-label="Default select example" required>
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
                            <input type="file" class="form-control image-upload" id="imageUpload1" required>
                            <div class="invalid-feedback">Please upload a cover image.</div>
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
                        {{--  short description  --}}
                        <div class="mb-3">
                            <label class="form-label">Sort Description</label>
                            <input type="text" class="form-control" placeholder="Sweet potato with fried chicken"
                                required>
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
                                            required />
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
                                <input type="text" class="form-control" placeholder="100" required />
                                <span class="input-group-text">g</span>
                            </div>
                        </div>
                        <div class="mb-3 col-2">
                            <label class="form-label">Total Calories</label>
                            <input type="text" class="form-control" placeholder="250" required />
                        </div>
                        <div class="mb-3 col-2">
                            <label class="form-label">Total Fat</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="100" required />
                                <span class="input-group-text">g</span>
                            </div>
                        </div>
                        <div class="mb-3 col-2">
                            <label class="form-label">Total Sugar</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="5" required />
                                <span class="input-group-text">g</span>
                            </div>
                        </div>
                        <div class="mb-3 col-2">
                            <label class="form-label">Total Protien</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="5" required />
                                <span class="input-group-text">g</span>
                            </div>
                        </div>
                        <div class="mb-3 col-2">
                            <label class="form-label">Total Carbohydrate</label>
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control" placeholder="5" required />
                                <span class="input-group-text">g</span>
                            </div>
                        </div>

                        <hr>
                        {{--  how to make  --}}
                        <h5>How to Make Meal</h5>
                        <div>
                            <label class="form-label">Making instructions</label>
                            <textarea class="form-control" placeholder="Enter instructions here" id="floatingTextarea2" style="height: 100px"
                                required></textarea>
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
