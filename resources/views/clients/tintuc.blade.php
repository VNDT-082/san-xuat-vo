@extends('layouts.client')

@section('title')
    {{ $title }}
@endsection

@section('contents')
    <div class="row px-5">
        <div class="col-12 col-md-3 text-center d-none d-md-block" style="height: 80vh">
            <h2 class="bg-danger text-danger text-white">DANH MỤC SẢN PHẨM</h1>
        </div>
        <div class="col-12 col-md-9">
            <div class="row text-center">
                <h3 class="fw-bold text-uppercase text-danger text-center">TIN TỨC -SỰ KIỆN</h3>
            </div>
            <div class="row">
                @foreach ($tintucs as $tintuc)
                    <div class="col-12 col-md-6 p-2">
                        <a href="{{ route('chitiettintuc', ['id' => $tintuc->id]) }}" class="text-decoration-none">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('images/' . $tintuc->HinhAnh) }}" class="img-fluid rounded-start"
                                            alt="{{ $tintuc->HinhAnh }}" width="100%" height="100%"
                                            style="padding-top: 5px; padding-left: 5px; padding-right: 5px">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $tintuc->TieuDe }}</h5>
                                            <p class="card-text">
                                                {{ strlen($tintuc->NoiDung) > 180 ? substr($tintuc->NoiDung, 0, 179) . '...' : $tintuc->NoiDung }}
                                                <br />
                                                <small class="text-body-secondary">{{ $tintuc->created_at }}</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
