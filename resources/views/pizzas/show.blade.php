@extends('layouts.app')

@section('content')

    <!-- title -->
    <title> {{ config('app.name'), 'PizzaHouse' }} &bull; {{$pizza->type}} </title>

    <div class="container">
        <div class="row d-flex justify-content-center px-3 py-3">
            <!-- pizza house image -->
            <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 mb-4">
                <div class="view overlay rounded z-depth-1">
                    <img src="{{ asset('img/pizza3.jpg') }}" class="img-fluid" alt="Pizza house Pizza :)">
                    <a href="/pizzas/{{ $pizza->id }}">
                        <div class="mask rgba-red-slight"></div>
                    </a>
                </div>
            </div>

            <!-- pizza description -->
            <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 mb-4">
                <div class="p-3">
                    <div class="text-left">
                        <a href="/pizzas" class="text-blue-400 font-bold hover:text-blue-800">
                            <h6 class="mb-3">Go Back</h6>
                        </a>

                        <a href="/pizzas/{{ $pizza->id }}" class="red-text">
                            <h6 class="font-weight-bold mb-3">
                                <i class="fas fa-pizza-slice pr-2"></i> Pizza House
                            </h6>
                        </a>

                        <!-- Post title -->
                        <h3 class="font-weight-bold mb-3"><strong>{{$pizza->type}}</strong></h3>

                        <!-- Excerpt -->
                        <p class="mb-3 dark-grey-text">
                            Base: <strong>{{ $pizza->base }}</strong>
                        </p>

                        <!-- Excerpt -->
                        <p class="mb-3 dark-grey-text">
                            Ksh. <span class="badge badge-success badge-pill py-1 px-3">{{ $pizza->price }}</span>
                        </p>

                        <!-- Post data -->
                        <p class="mb-3">by <a><strong>{{$pizza->name}}</strong></a>, 
                            <?php echo $pizza->created_at->format('d/m/Y'); ?>
                        </p>

                        <a href="/pizzas" class="btn btn-md success-color white-text font-bold tracking-wide">
                            Order Pizza Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection