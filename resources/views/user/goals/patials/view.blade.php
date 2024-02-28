<div class="modal fade" id="viewGoal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Workout Name</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card border rounded-xl p-2 mb-3">
                    <div class="d-flex gap-3 align-items-center">
                        <img class="view-img"
                            src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                        <div>
                            <h1>Sprinter Starter</h1>
                            <h5 class="text-muted">45 minutes</h5>
                            <h5 class="badge bg-blue text-white">Beginner</h5>
                        </div>
                    </div>
                </div>

                <div class="d-flex gap-3 p-0 mb-3">
                    <div class="card rounded-xl p-3 text-start w-100 border">
                        <h5 class="text-muted">Target</h5>
                        <h1 class="fw-bold">120cal</h1>
                        <h5 class="text-muted">45min</h5>
                    </div>

                    <div class="card rounded-xl p-3 text-start w-100 border border-success"
                        style="background-color: rgba(40, 167, 69, 0.1);">
                        <div class=" d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="text-muted">Completed</h5>
                                <h1 class="text-success fw-bold">100cal</h1>
                                <h5 class="text-muted">30min</h5>
                            </div>
                            <div>
                                <h1 class="text-muted fw-bold">80%</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    {{--  description  --}}
                    <h5 class="text-main">Description</h5>
                    <p class="text-muted">Eating enough protein is key for supporting weight loss efforts, energy
                        levels,
                        and for
                        building muscle. This
                        program will teach you how to incorporate high-quality protein into your diet for optimal
                        success no
                        matter
                        what your wellness goals may be.</p>
                </div>

                <div class="mt-3">
                    {{--  ages  --}}
                    <h5 class="text-main">Effective Ages</h5>
                    <div class="d-flex gap-1">
                        <p class="text-muted border rounded-pill px-3 py-1">10-20</p>
                        <p class="text-muted border rounded-pill px-3 py-1">20-30</p>
                        <p class="text-muted border rounded-pill px-3 py-1">30-40</p>
                        <p class="text-muted border rounded-pill px-3 py-1">40-50</p>
                    </div>
                </div>

                <div class="mt-3">
                    {{--  restriced  --}}
                    <h5 class="text-main">Restricted Diseases</h5>
                    <div class="d-flex gap-1">
                        <p class="text-muted border rounded-pill px-3 py-1">Cholesterol</p>
                        <p class="text-muted border rounded-pill px-3 py-1">Low sugar</p>
                        <p class="text-muted border rounded-pill px-3 py-1">High Sugar</p>
                        <p class="text-muted border rounded-pill px-3 py-1">Low pressure</p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-gray-sq btn-ui"data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
