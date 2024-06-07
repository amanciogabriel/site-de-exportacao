@extends('layouts.app')

@section('title')
    <title>Home</title>
@endsection

<!------ Serapação ---->

@section('css')
    <link rel="stylesheet" href="{{asset('css/Homeblade.css')}}">
@endsection

<!------ Separação ---->

@section('body')
<div id="carouselExampleIndicators" class="carousel slide carousel" data-bs-ride="carousel">
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
  <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid my-9 mb-9">

  
  
</div>
<!-- End of .container -->
</div>
<div class="container-fluid mt-9">
  @yield('body')
</div>
@endsection

@section('js')
    <script src="{{ asset('js/homeblade.js') }}"></script>
@endsection