@extends('layouts.app')

@section('content')

    <title>{{ config('app.name', 'PizzaHouse') }} &bull; Home</title>

    <div class="container">
        <div class="row d-flex justify-center">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-1s">
                <div class="row">
                    <!-- home description -->
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                        <div class="text-right">
                            <h1 class="font-semibold text-gray-900 text-xl mb-3">
                                Welcome to Pizza
                                <span class="red-text">House</span>
                            </h1>

                            <p class="mb-3 text-gray-700 font-small">
                                Pizza House is a family-owned business with restaurants in Nairobi,
                                and Eldoret. We serve the most fresh food for you with fast delivery.
                            </p>

                            <a href="" class="btn btn-lg pink accent-2 white-text tracking-wider">
                                Order Online
                            </a>

                            <a href="" class="btn btn-md border border-green-500 black-text">
                                Our menu
                            </a>
                        </div>
                    </div>

                    <!-- home image -->
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                        <div class="view overlay rounded z-depth-1">
                            <img src="{{ asset('img/pizza5.jpg') }}" class="img-fluid" alt="Home Pizza House image">
                            <a href="#!">
                                <div class="mask rgba-red-light"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection