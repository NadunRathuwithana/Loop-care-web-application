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
                        <h4 class="fw-bold"><span class="text-muted fw-light"></span>Sign Up Management</h4>
                    </div>

                    <div class="card">
                        <h5 class="card-header">All Users</h5>
                        <div class="table-responsive text-nowrap overflow-visible">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>
                                            <strong>Jhon Wick</strong>
                                        </td>
                                        <td>
                                            jhonwick@email.com
                                        </td>
                                        <td>
                                            Doctor
                                        </td>
                                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                        <td>


                                            <div class="dropdown z-50">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0)"
                                                        data-bs-toggle="modal" data-bs-target="#view_doctor"><i
                                                            class='bx bx-info-circle'></i> View</a>
                                                    {{-- /////////// only active and all ///////////// --}}
                                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                                            class='bx bx-x-circle'></i>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.signup_management.patials.doctor_info_modal')
    @include('admin.signup_management.patials.trainer_info_modal')
    @include('admin.signup_management.patials.view_doctor')
    @include('admin.signup_management.patials.view_trainer')
@endsection
