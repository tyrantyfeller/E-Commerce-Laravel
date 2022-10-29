@extends('layouts.app')

@section('content')

    {{-- Banners --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background: #2e2e2e;">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="img"><img class="d-block img-fluid" src="{{URL('/images/example/slides/onlyslides1.jpg')}}" alt="First slide"></div>
            </div>
            <div class="carousel-item">
                <div class="img"><img class="d-block img-fluid" src="{{URL('/images/example/slides/onlyslides2.jpg')}}" alt="Second slide"></div>
            </div>
            <div class="carousel-item">
                <div class="img"><img class="d-block img-fluid" src="{{URL('/images/example/slides/onlyslides3.jpg')}}" alt="Third slide"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Produtos</h1>
    </div>

    @include('layouts.productList')

@endsection
