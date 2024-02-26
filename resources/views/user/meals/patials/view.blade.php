@extends('layouts.master')

@section('content')
    @include('layouts.userNav')

    <div class="container px-md-5 hero-slider mt-3">

        <div class="d-flex gap-3 align-items-center border rounded-xl p-3">
            <img class="view-img"
                src="https://images.unsplash.com/photo-1501595091296-3aa970afb3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
            <div>
                <h1>Chopped Tuna Salad</h1>
                <h5 class="text-muted">Waight Gain</h5>
                <h5 class="badge bg-blue text-white">Breakfast</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <div class="mt-3">
                    {{--  description  --}}
                    <h3 class="text-main">Description</h3>
                    <p class="text-muted">Eating enough protein is key for supporting weight loss efforts, energy levels,
                        and for
                        building muscle. This
                        program will teach you how to incorporate high-quality protein into your diet for optimal success no
                        matter
                        what your wellness goals may be.</p>
                </div>

                <div class="mt-3">
                    {{--  Instructions  --}}
                    <h3 class="text-main">Instructions</h3>
                    <div>
                        <ol class="text-muted">
                            <li>In a mixing bowl, flake the drained tuna using a fork. Break up any large chunks until it's
                                evenly
                                shredded.</li>
                            <li>Add the chopped celery and red onion to the bowl with the tuna.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="mt-3">
                    {{--  ingrediants  --}}
                    <h3 class="text-main">Ingrediants</h3>
                    <div>
                        <ul class="text-muted">
                            <li>2 cans of tuna, drained</li>
                            <li>2 cans of tuna, drained</li>
                        </ul>
                    </div>
                </div>

                <div class="mt-3">
                    <h3 class="text-main">Nutrition Information</h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="border rounded-xl p-2">
                                <table class="table nutrition-table">
                                    <thead>
                                        <tr>
                                            <th>Serving Size</th>
                                            <th>100g</th>
                                        </tr>
                                    </thead>
                                    <tbody class=" text-muted">
                                        <tr>
                                            <td>Total Calories</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                            <td>Total Fat (g)</td>
                                            <td>10</td>
                                        </tr>
                                        <tr>
                                            <td>Total Sugar (g)</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>Total Protein (g)</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>Total Carbohydrate (g)</td>
                                            <td>15</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            {{--  ages  --}}
            <h3 class="text-main">Effective Ages</h3>
            <div class="d-flex gap-1">
                <p class="text-muted border rounded-xl px-3 py-1">10-20</p>
                <p class="text-muted border rounded-xl px-3 py-1">20-30</p>
                <p class="text-muted border rounded-xl px-3 py-1">30-40</p>
                <p class="text-muted border rounded-xl px-3 py-1">40-50</p>
            </div>
        </div>

        <div class="mt-3">
            {{--  restriced  --}}
            <h3 class="text-main">Restricted Diseases</h3>
            <div class="d-flex gap-1">
                <p class="text-muted border rounded-xl px-3 py-1">Cholesterol</p>
                <p class="text-muted border rounded-xl px-3 py-1">Low sugar</p>
                <p class="text-muted border rounded-xl px-3 py-1">High Sugar</p>
                <p class="text-muted border rounded-xl px-3 py-1">Low pressure</p>
            </div>
        </div>
    </div>
@endsection
