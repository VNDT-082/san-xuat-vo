@extends('layouts.client')
@section('title')
    {{ $title }}
@endsection

@section('contents')
    <div class="row px-5" style="background-color: rgb(213, 219, 219); height: 40px;">
        <p class="fw-bold text-uppercase my-auto"> <i class="fa fa-home"></i> » {{ $vo->loaivo->TenLoai }}</p>
    </div>
    <div class="row px-5">
        <div class="col-12 col-md-3 text-center d-none d-md-block">
            <h2 class="bg-danger text-danger text-white">DANH MỤC SẢN PHẨM</h1>
        </div>
        <div class="col-12 col-md-9">
            <h4 class="p-1 fw-bold text-uppercase">{{ $vo->TenVo }}</h4>
            <div class="row">
                <div class="col-sx-12 col-md-7">
                    <img src="{{ asset('images/' . $vo->HinhAnh) }}" width="100%" />
                    <div class="row mt-2">
                        @if ($vo->hinhanh)
                            @foreach ($vo->hinhanh as $hinhanh)
                                <div class="col-3">
                                    <img src="{{ asset('images/' . $hinhanh->FileName) }}" width="100%" />
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
                <div class="col-sx-12 col-md-5">
                    <h4 class="pt-5">Thông tin chi tiết</h4>
                    <p>Chất liệu: {{ $vo->ChatLieu }}</p>
                    <p>Mô tả: {{ $vo->MoTa }}</p>
                    <p>Phù hợp với: {{ $vo->Phai }}</p>
                    <p>Thương hiệu: {{ $vo->congty->TenCongTy . ' (' . $vo->congty->TenVietTat . ')' }}</p>
                </div>
            </div>
        </div>
    </div>
    <h4 class="px-5 fw-bold text-uppercase text-decoration-underline">Sản phẩm khác</h4>
    <div class="row px-5">
        @if ($topvo)
            @foreach ($topvo as $item)
                <div class="col-6 col-md-3 py-2">
                    <a href="{{ route('chi-tiet-san-pham', ['id' => $vo->id]) }}" class="text-decoration-none">
                        <div class="card" style="width: 100%;">
                            <img src="{{ asset('images/' . $vo->HinhAnh) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-danger text-center text-uppercase fw-bold">
                                    {{ $vo->TenVo }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        @endif

    </div>
    {{ $vo->TenVo }}


@endsection
