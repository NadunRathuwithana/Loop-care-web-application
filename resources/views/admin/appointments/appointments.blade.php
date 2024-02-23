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
                        <h4 class="fw-bold"><span class="text-muted fw-light"></span>Manage Appointments</h4>
                    </div>

                    <div class="card">
                        <h5 class="card-header">All Appointments</h5>
                        <div class="table-responsive text-nowrap overflow-visible">
                            <ul class="nav nav-pills mb-3 px-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pending" data-bs-toggle="pill"
                                        data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-pending"
                                        aria-selected="true">Pending</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="all" data-bs-toggle="pill"
                                        data-bs-target="#pills-all" type="button" role="tab"
                                        aria-controls="pills-all" aria-selected="false">All</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-0" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-pending" role="tabpanel"
                                    aria-labelledby="pills-pending-tab" tabindex="0">

                                    @include('admin.appointments.patials.table')

                                </div>
                                <div class="tab-pane fade" id="pills-all" role="tabpanel"
                                    aria-labelledby="pills-all-tab" tabindex="0">
                                    @include('admin.appointments.patials.table')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
