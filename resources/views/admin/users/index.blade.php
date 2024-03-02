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
                        <h4 class="fw-bold"><span class="text-muted fw-light"></span>User Management</h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-modal">
                            Create User
                        </button>
                    </div>

                    <div class="card">
                        <h5 class="card-header">Admin Users</h5>
                        <div class="table-responsive text-nowrap overflow-visible">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th class="text-center">Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">

                                    @foreach ($allAdminUsers as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>
                                                <strong>{{ $data->fName }} {{ $data->lName }}</strong>
                                            </td>
                                            <td>
                                                {{ $data->email }}
                                            </td>
                                            <td>
                                                {{ $data->userType }}
                                            </td>
                                            <td class="text-center">
                                                <span
                                                    class="badge {{ $data->isActive ? 'bg-label-primary' : 'bg-label-danger' }} me-1">
                                                    {{ $data->isActive ? 'Active' : 'Deactivated' }}
                                                </span>
                                            </td>

                                            <td>
                                                <div class="dropdown z-50">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                        data-bs-toggle="dropdown">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" data-bs-toggle="modal"
                                                            data-bs-target="#edit-modal_{{ $data->id }}"><i
                                                                class="bx bx-edit-alt me-2"></i>Edit</a>
                                                        <a class="dropdown-item"
                                                            href="{{ url('/status_admin_users' . $data->id) }}"><i
                                                                class='bx bx-info-circle me-2'></i>{{ $data->isActive ? 'Deactivated' : 'Activate' }}</a>
                                                        <a class="dropdown-item text-danger"
                                                            href="{{ url('/delete_admin_users' . $data->id) }}"><i
                                                                class="bx bx-trash me-2"></i>
                                                            Delete</a>
                                                    </div>
                                                    @include('admin.users.edit')
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('admin.users.create')
@endsection
