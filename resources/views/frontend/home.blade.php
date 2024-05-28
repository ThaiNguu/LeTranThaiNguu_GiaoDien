@extends('layouts.site')
@section('content')
    <x-slider/>
    <x-product-new/>
    <x-product-sale/>
    <section id="post-new" class="p-3 ">
        <h2>Bài viết mới</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card" id="card-news1">
                    <img src="{{ asset('images/baiviet1.jpg') }}" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" id="card-news2">
                    <img src="{{ asset('images/baiviet2.jpg') }}" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
                <div class="card" id="card-news3">
                    <img src="{{ asset('images/baiviet3.jpg') }}" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>John Doe</b></h4>
                        <p>Architect & Engineer</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
@endsection
@section('title','Trang chủ')
