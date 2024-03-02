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
                        <h4 class="fw-bold"><span class="text-muted fw-light"></span>All Users</h4>
                    </div>

                    <div class="card">
                        <h5 class="card-header">All Users</h5>
                        <div class="table-responsive text-nowrap overflow-visible">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($allUsers as $data)
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

    @include('admin.signup_management.patials.doctor_info_modal')
    @include('admin.signup_management.patials.trainer_info_modal')
    @include('admin.signup_management.patials.view_doctor')
    @include('admin.signup_management.patials.view_trainer')
@endsection
