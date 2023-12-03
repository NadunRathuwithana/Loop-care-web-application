@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form id="multiStepForm">
                    <div class="step">
                        <h2>Step 1</h2>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <button class="btn btn-primary next">Next</button>
                    </div>
                    <div class="step">
                        <h2>Step 2</h2>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <button class="btn btn-secondary prev">Previous</button>
                        <button class="btn btn-primary next">Next</button>
                    </div>
                    <div class="step">
                        <h2>Step 3</h2>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message"></textarea>
                        </div>
                        <button class="btn btn-secondary prev">Previous</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
