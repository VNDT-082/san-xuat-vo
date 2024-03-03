@extends('layouts.client')

@section('title')
    {{ $title }}
@endsection

@section('contents')
    <div class="row px-5" style="background-color: rgb(213, 219, 219); height: 40px;">
        <p class="fw-bold text-uppercase my-auto"> <i class="fa fa-home"></i> » Giới thiệu</p>
    </div>
    <div class="row px-5">
        <div class="col-sx-12 col-md-3 text-center d-none d-md-block" style="height: 80vh">
            <h2 class="bg-danger text-danger text-white">DANH MỤC SẢN PHẨM</h1>
        </div>
        <div class="col-sx-12 col-md-9">
            <p>Hiện công ty chúng tôi chưa có nhu cầu tuyển dụng.</p>

        </div>
    </div>
@endsection
