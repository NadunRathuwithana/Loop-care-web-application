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
                        <h4 class="fw-bold"><span class="text-muted fw-light"></span>Customer Reviews</h4>
                    </div>

                    <div class="card">
                        <h5 class="card-header">All Reviews</h5>
                        <div class="table-responsive text-nowrap overflow-visible">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Rating</th>
                                        <th>Feedback</th>
                                        <th>User Name</th>
                                        <th>Doctor/ Trainer Name</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>
                                            <strong>Good service and valuble advice</strong>
                                        </td>
                                        <td>
                                            Nadun Rathuwithana
                                        </td>
                                        <td>
                                            Sujith Wasantha
                                        </td>
                                        <td>25.01.2024</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
