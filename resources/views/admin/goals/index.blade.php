@extends('layouts.adminMaster')

@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('admin.patials._side_menu')

            <div class="layout-page">

                @include('admin.patials._nav')



                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="d-flex justify-content-between  py-3 mb-4">
                        <h4 class="fw-bold"><span class="text-muted fw-light"></span>Goal Management</h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-modal">
                            Create Goal
                        </button>
                    </div>

                    <div class="card">
                        <h5 class="card-header">All Goals</h5>
                        <div class="table-responsive text-nowrap overflow-visible">
                            <div class="table-responsive text-nowrap overflow-visible">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Goal Name</th>
                                            <th>Category</th>
                                            <th>Dificulty</th>
                                            <th>Effective Age</th>
                                            <th>Restricted Diseases</th>
                                            <th class="text-center">Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($allGoals as $data)
                                            <tr>
                                                <td>
                                                    <strong>{{ $data->goal_name }}</strong>
                                                </td>
                                                <td>
                                                    {{ $data->category }}
                                                </td>
                                                <td>
                                                    {{ $data->goal_difficulty }}
                                                </td>
                                                <td>
                                                    @foreach ($data->ages_name as $item)
                                                       {{  $item->effective_age }} ,
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($data->restrictions_name as $item)
                                                       {{  $item->restrict }} ,
                                                    @endforeach
                                                </td>
                                                <td class="text-center">
                                                    <span
                                                        class="badge {{ $data->is_active ? 'bg-label-primary' : 'bg-label-danger' }} me-1">
                                                        {{ $data->is_active ? 'Active' : 'Deactivated' }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <div class="dropdown z-50">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                            data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0)"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#edit-modal_{{ $data->id }}"><i
                                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item"
                                                                href="{{ url('/status_goal' . $data->id) }}"><i
                                                                    class='bx bx-info-circle me-2'></i>{{ $data->is_active ? 'Deactivated' : 'Activate' }}</a>
                                                            <a class="dropdown-item text-danger" href="{{ url('/delete_goal' . $data->id) }}"><i
                                                                    class="bx bx-trash me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @include('admin.goals.edit')
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('admin.goals.create')
@endsection

