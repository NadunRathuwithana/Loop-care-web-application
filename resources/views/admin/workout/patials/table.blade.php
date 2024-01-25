<div class="table-responsive text-nowrap overflow-visible">
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Duration</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            <tr>
                <td>
                    <strong>Fast neck pain workout</strong>
                </td>
                <td>
                    Category 1
                </td>
                <td>
                    10.45
                </td>
                <td><span class="badge bg-label-primary me-1">Active</span></td>
                <td>
                    {{--  //////////////////////////////--only pending----/////////////////////////////////  --}}
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                        data-bs-target="#approve-modal">View</button>
                    {{--  ////////////////////////////////////////////////////////////////  --}}

                    {{--  hide in pending  --}}
                    <div class="dropdown z-50">
                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal"
                                data-bs-target="#view-modal"><i class='bx bx-info-circle'></i> View</a>
                            {{-- /////////// only active and all ///////////// --}}
                            <a class="dropdown-item" href="javascript:void(0)"><i class='bx bx-x-circle'></i>
                                Deactivate</a>
                            {{--  ////////////////////////////////////////  --}}
                            <a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                    class="bx bx-trash me-1"></i>
                                Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
