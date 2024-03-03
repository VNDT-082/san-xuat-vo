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
            <div class="row text-left mt-5">
                <h3 class="fw-bold text-uppercase text-danger"> {{ $title }}</h3>
                <p>{{ $tintuc->NoiDung }}</p>
                @if ($tintuc->HinhAnh != 'default.jpg')
                    <div class="row" style="width: 70%; margin-left: 15%;">
                        <img src="{{ asset('images/' . $tintuc->HinhAnh) }}" alt="{{ $tintuc->HinhAnh }}" width="100%"
                            style="border-radius: 10px" />
                    </div>
                @endif
            </div>
            <div class="row">
                @if ($tintuc->chitiettintuc)
                    @foreach ($tintuc->chitiettintuc as $chitiettintuc)
                        <b class="fw-bold text-uppercase "> {{ $chitiettintuc->TieuDe . ':' }}</b>
                        <?php $arr_noi_dung = explode('-', $chitiettintuc->NoiDung); ?>
                        @foreach ($arr_noi_dung as $noi_dung_item)
                            <p>{{ $noi_dung_item != '' ? '- ' . $noi_dung_item : '' }}</p>
                        @endforeach

                        @if ($chitiettintuc->HinhAnh != 'default.jpg')
                            <div class="row" style="width: 70%; margin-left: 15%;">
                                <img src="{{ asset('images/' . $chitiettintuc->HinhAnh) }}"
                                    alt="{{ $chitiettintuc->HinhAnh }}" width="100%" style="border-radius: 10px" />
                            </div>
                        @endif
                    @endforeach
                @endif

            </div>

            <div class="row">
                <i class="fa fa-facebook-square my-3" style="color: blue"> <a target="_blank"
                        href="https://developers.facebook.com/products/social-plugins/comments/?utm_campaign=social_plugins&amp;utm_medium=offsite_pages&amp;utm_source=comments_plugin">Plugin
                        bình luận trên Facebook</a></i>

                <h2 class="fw-bold text-danger">BÀI VIẾT LIÊN QUAN</h2>
                @foreach ($toptintucs as $tintuc_item)
                    <a href="{{ route('chitiettintuc', ['id' => $tintuc_item->id]) }}"
                        class="text-dark text-decoration-none">
                        <h5>{{ $tintuc_item->TieuDe }}</h5>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
