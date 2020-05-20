@extends('layouts.app')

@section('content')

    <title>{{ config('app.name', 'PizzaHouse') }} &bull; Pizzas</title>

    <div class="container">
        <div class="row d-flex justify-content-center p-10">
            <!-- pizza image -->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mb-4">
                <div class="view overlay z-depth-2 rounded zoom">
                    <img src="{{ asset('img/pizza1.jpg') }}" class="img-fluid" alt="Pizza Image">
                    <a href="#!">
                        <div class="mask rgba-black-light"></div>
                    </a>
                </div>
            </div>
            <!-- end pizza image -->

            <!-- Grid column -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-lg-2 mb-3">
                <!-- Category -->
                <a href="#!" class="red-text">
                    <h6 class="font-weight-bold mb-3 hover:text-red-600"><i class="fas fa-utensils pr-2"></i>Pizza</h6>
                </a>

                <!-- Post title -->
                <h3 class="font-weight-bold mb-3"><strong>Pepperorni</strong></h3>
                
                <!-- Excerpt -->
                <p class="mb-3 dark-grey-text">
                    Pepperoni is made from a mixture of ground pork and beef mixed with spices and flavorings.
                </p>

                <!-- Post data -->
                <p>by <a><strong>Italioni Chris</strong></a>, 
                    <?php echo date('d/m/Y'); ?>
                </p>

                <!-- Read more button -->
                <a class="btn btn-danger btn-md">Read more</a>
            </div>
            <!-- Grid column -->
        </div>
    </div>

@endsection