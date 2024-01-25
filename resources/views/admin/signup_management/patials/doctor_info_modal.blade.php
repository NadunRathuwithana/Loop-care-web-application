{{--  Create Modal  --}}
<div class="modal fade" id="doctor_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom pb-3">
                <h5 class="modal-title" id="exampleModalLabel1">Registration Request - Doctor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <h3 class="m-0 fw-bold">John Wick</h3>
                        <p>johanwick@email.com</p>
                    </div>
                    <div>
                        <button type="button" class="btn btn-outline-primary"><i class='bx bxs-download'></i> Medical
                            Licence</button>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4 mb-2">
                        <h4 class="m-0">Male</h4>
                        <p>Gender</p>
                    </div>

                    <div class="col-4 mb-2">
                        <h4 class="m-0">1988.03.24</h4>
                        <p>Birthday</p>
                    </div>

                    <div class="col-4 mb-2">
                        <h4 class="m-0">5+ Years</h4>
                        <p>Experience</p>
                    </div>
                </div>

                <div class="row">
                    <p class="m-0">Working Hospital : Jayawardanapura General Hospital</p>
                    <p class="m-0">District : Colombo</p>
                    <p class="m-0">SLMC Reg No : 23213213</p>
                </div>

                <hr>

                {{--  Question  --}}
                <div class="row mt-3">
                    <h5 class="m-0">What is your Speciality</h5>
                    <p class="m-0">Orthopedic</p>
                </div>
                {{--  Question  --}}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger">Reject</button>
                <button type="submit" class="btn btn-primary">Approve</button>
            </div>
        </div>
    </div>
</div>
