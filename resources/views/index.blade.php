@extends('layouts.default')
@section('slider')
@include('partials.slider')
@endsection
@section('content')
    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="row">
            @foreach($cat_months as $catmonth)
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/{{$catmonth['image']}}" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">{{$catmonth['title']}}</h5>
                <p class="text-center"><a class="btn btn-success">{{$catmonth['button']}}</a></p>
            </div>
            @endforeach
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident.
                    </p>
                </div>
            </div>
            <div class="row">
            @foreach($features as $feature)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="/show">
                            <img src="./assets/img/{{$feature['image']}}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">${{$feature['price']}}</li>
                            </ul>
                            <a href="/show" class="h2 text-decoration-none text-dark">{{$feature['title']}}</a>
                            <p class="card-text">
                                {{$feature['text']}}
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

@endsection