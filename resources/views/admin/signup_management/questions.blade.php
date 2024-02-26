@extends('layouts.adminMaster')

@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('admin.patials._side_menu')

            <div class="layout-page">

                @include('admin.patials._nav')


                {{--  content  --}}

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="d-flex justify-content-between  py-3 mb-4">
                        <h4 class="fw-bold"><span class="text-muted fw-light"></span>Question Management</h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-modal">
                            Add Question
                        </button>
                    </div>

                    <div class="card">
                        <h5 class="card-header">Questions and Answers</h5>
                        <div class="table-responsive text-nowrap overflow-visible">
                            <table class="table" id="table">
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Answers</th>
                                        <th>Effective Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    {{-- <tr>
                                        <td>
                                            <strong>What is your pain?</strong>
                                        </td>
                                        <td>
                                            Back Pain,
                                            Neck Pain,
                                            Knee Pain,
                                            Elbow Pain,
                                            Other Pain
                                        </td>
                                        <td>
                                            Patient
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown z-50">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#edit-modal"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="edit_user"><i
                                                            class='bx bx-info-circle'></i> Deactivate</a>
                                                    <a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.signup_management.patials.create-modal')
    @include('admin.signup_management.patials.edit-modal')
@endsection
@section('scripts')
    <script>
         $(function() {
        var table = $('#table').DataTable({
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: "{{ route('questions-setup.get-questions') }}",
            order: [ 1, 'asc' ],
            columns: [
                {
                    data: 'question',
                    name: 'question'
                },
                {
                    data: 'answers',
                    name: 'answers'
                },
                {
                    data: 'action',
                    name: 'action'
                },
            ]
        });

        });

        //delete farm
        function submitDeleteForm(form) {
        new Swal({
                title: "Are you sure?",
                text: "to delete this vessel list?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes Delete",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
            })
            .then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        return false;
        }
    </script>
@endsection

