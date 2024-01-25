@extends('layouts.adminMaster')

@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('admin.patials._side_menu')

            <div class="layout-page">

                @include('admin.patials._nav')

                <div class="d-flex justify-content-center align-items-center h-100">
                    <h1>Loopcare Admin Dashboard</h1>
                </div>

            </div>
        </div>
    </div>
@endsection
