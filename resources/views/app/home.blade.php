@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/Homeblade.css')}}">
@endsection     

@section('js')
    <script src="{{ asset('js/homeblade.js') }}"></script>
@endsection     

@section('body')
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('img/feliz.jpg')}}" class="d-block w-100" alt="Banner 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/image1.jpg')}}" class="d-block w-100" alt="Banner 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/image3.jpg')}}" class="d-block w-100" alt="Banner 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- End of carousel -->
            </div>
        </div>
    </div>
@endsection
