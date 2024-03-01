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
                        <h4 class="fw-bold"><span class="text-muted fw-light"></span>Meal Management </h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create-modal">
                            Create Meal
                        </button>
                    </div>

                    <div class="card">
                        <h5 class="card-header">All Meals</h5>
                        <div class="table-responsive text-nowrap overflow-visible">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Meal Name</th>
                                        <th>Category</th>
                                        <th>Meal Time</th>
                                        <th>Effective Age</th>
                                        <th>Restricted Diseases</th>
                                        <th>Meal Ingredients</th>
                                        <th class="text-center">Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($allMeals as $data)
                                        <tr>
                                            <td>
                                                <strong>{{ $data->meal_name }}</strong>
                                            </td>
                                            <td>
                                                {{ $data->category }}
                                            </td>
                                            <td>
                                                {{ $data->meal_time }}
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
                                            <td>
                                                @foreach ($data->ingredient_name as $item)
                                                   {{  $item->ingredient }} ,
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
                                                                href="{{ url('/status_meal' . $data->id) }}"><i
                                                                    class='bx bx-info-circle me-2'></i>{{ $data->is_active ? 'Deactivated' : 'Activate' }}</a>

                                                        <a class="dropdown-item text-danger" href="{{ url('/delete_meal' . $data->id) }}"><i
                                                                class="bx bx-trash me-1"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @include('admin.meals.edit')
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@include('admin.meals.create')
