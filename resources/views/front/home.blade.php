@extends('front.layouts.frontend')
@section('content')
@include('front.includes.banner')

<div class="container mt-5 p-4">
    <div class="row">
        <div class="col text-center">
            <h2> BERITA TERBARU</h2>
            <hr class="star-light">
        </div>
    <div class="row mt-4 p-4">
        @foreach ($artikel as $key=> $row )
        <div class="col-md-4">
            <div class="card">
                <img src="{{asset('uploads/'.$row->gambar_artikel)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">
                    <a href="{{ route('detail-artikel',$row->slug)}}">{{$row->judul}}</a>
                </h5>
                  <p class="card-text">{{$row->body}}</p>
                </div>
                <div class="card-body">
                  <!-- <a href="#" class="btn btn-primary  btn-sm-rounded">{{$row->users->name}}</a> -->
                  <a href="#" class="btn btn-danger  btn-sm">{{$row->kategori->nama_kategori}}</a>
                </div>
              </div>
          </div>
        @endforeach
</div>
@endsection
