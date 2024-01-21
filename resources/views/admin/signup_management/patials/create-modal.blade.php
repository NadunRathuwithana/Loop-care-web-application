{{--  Create Modal  --}}
<div class="modal fade" id="create-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Add Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label for="question" class="form-label">Effective Role</label>
                        <select class="form-select">
                            <option value="Patient" selected>Patient</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Trainer">Trainer</option>
                          </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label for="question" class="form-label">Question</label>
                        <input type="text" id="question" class="form-control"
                            placeholder="What is your daily goal?" />
                    </div>
                </div>
                <div class="row g-2">

                    <div class="col mb-0">
                        <label for="answer" class="form-label">Answers</label>
                        <div class="answers-container">
                            <div class="d-flex gap-2 answers mb-2">
                                <input type="text" class="form-control" placeholder="Answer" />
                                <button class="btn btn-primary add-btn" style="padding:0.4375rem .7rem;"><i
                                        class='bx bx-plus'></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-danger err-limt d-none">You can only add up to 5 answers</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save Question</button>
            </div>
        </div>
    </div>
</div>
