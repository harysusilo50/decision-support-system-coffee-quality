@extends('layout.master')
@section('title', 'SPK Coffee')
@section('konten')
<div class="container my-5 animated fadeInUp">
  <div style="background-color: rgba(0, 0, 0, 0.363);" class=" shadow p-3 mb-5 rounded ">
    <h1 class="text-white text-center"> <b> Selamat Datang di Aplikasi Penentuan Biji Kopi Terbaik </b></h1>
    <center class="text-white"> 
        <h5> Dengan Metode SAW </h5>
        Distributed By Penentuan Biji Kopi Terbaik
      </center>
      {{-- <h1>
        {{ auth()->user()->username }}
      </h1> --}}
 </div>
</div>

<div class="container-md d-flex flex-wrap justify-content-around">
    <img class="my-3 rounded shadow-lg img-fluid animated fadeInUp" data-toggle="tooltip" data-placement="top" title="Tooltip on top" src="{{asset('images/pic-1-coffee.jpeg')}}" width="300px">
    <img class="my-3 rounded shadow-lg img-fluid animated fadeInUp" data-toggle="tooltip" data-placement="top" title="Tooltip on top" src="{{asset('images/pic-2-coffee.jpeg')}}" width="300px">
    <img class="my-3 rounded shadow-lg img-fluid animated fadeInUp" data-toggle="tooltip" data-placement="top" title="Tooltip on top" src="{{asset('images/pic-3-coffee.jpeg')}}" width="300px">
</div>

@endsection
      