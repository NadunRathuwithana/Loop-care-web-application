@extends('layouts.adminMaster')

@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('admin.patials._side_menu')

            <div class="layout-page">
                @include('admin.patials._nav')

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Users/</span> Add User</h4>

                    <!-- Basic Layout -->
                    <div class="row">
                        <div class="col-xl">
                            <div class="card mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Add New User</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="mb-3 col-12 col-md-6">
                                                <label class="form-label" for="basic-default-fullname">First Name</label>
                                                <input type="text" class="form-control" placeholder="John" />
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label class="form-label" for="basic-default-company">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Doe" />
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label class="form-label" for="basic-default-email">Email</label>
                                                <div class="input-group input-group-merge">
                                                    <input type="text" class="form-control"
                                                        placeholder="john.doe@loopcare.com" />
                                                </div>
                                            </div>
                                            <div class="mb-3 col-12 col-md-6">
                                                <label class="form-label" for="basic-default-role">Role</label>
                                                <div class="input-group input-group-merge">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option value="Admin" selected>Admin</option>
                                                        <option value="Medical Specialist">Medical Specialist</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Add User</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
