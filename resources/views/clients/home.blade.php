@extends('layouts.client')

@section('title')
    {{ $title }}
@endsection

@section('contents')
    <img src="{{ asset('images/slide-01-f892d8b4.jpg') }}" width="100%" />
    <h2 class="text-uppercase fw-bold text-danger text-center my-4">Chất lượng là tất cả</h2>
    <div class="row px-5 py-2">
        <?php $arr_overview = json_decode($overviews, true); ?>
        @for ($i = 0; $i < count($arr_overview); $i++)
            <?php $overview_filename = $i + 1; ?>
            <div class="col-6 col-md-3 my-2 text-center">
                <a href="{{ route('overview', ['id' => $i]) }}" class="text-decoration-none">
                    <div class="card" style="width: 100%;">
                        <img src="{{ asset('images/h' . $overview_filename . '.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <b>{{ $arr_overview[$i]['title'] }}</b>
                            <p class="card-text">
                                {{ strlen($arr_overview[$i]['description']) > 120
                                    ? substr($arr_overview[$i]['description'], 0, 120) . '...'
                                    : $arr_overview[$i]['description'] }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endfor
        <div>
            <img src="{{ asset('images/banner-footer-bottom.jpg') }}" width="100%" style="border-radius: 7px" />
        </div>

        <h2 class="text-uppercase fw-bold text-danger text-center my-4">CÁC SẢN PHẨM ĐÃ GIA CÔNG</h2>
        <div>
            <div class="row px-5 py-2">
                @foreach ($vos as $vo)
                    <div class="col-6 col-md-3 my-2">
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
                <div class="row py-4 px-3"
                    style="background-image: linear-gradient(90deg,#07b1ba,#52a8c8); border-radius: 10px">
                    <div class="col-12 col-md-7">
                        <h5 class="text-uppercase fw-bold text-danger text-center pt-4">
                            Xưởng gia công tất (vớ) - Cơ sở sản xuất vớ Tiến Phát
                        </h5>
                        <p style="font-size: 15px">
                            Tất (vớ) là một trong những phụ kiện không thể thiếu trong những ngày đông giá rét. Chúng giúp
                            giữ ấm đôi chân tránh được các loại bệnh lý do thời tiết gây ra như bệnh cước chân cước tay. Vậy
                            bạn nên sử dụng các loại tất như thế nào? Được sản xuất từ đâu? Chất liệu ra sao thì tốt cho sức
                            khoẻ nhưng vẫn đảm bảo độ thẩm mỹ cho người sử dụng.
                            <br />
                            <b>Xưởng gia công tất (vớ) - Cơ sở sản xuất vớ Tiến Phát</b> là địa chỉ tin cậy chuyên gia công,
                            sản xuất và cung cấp sỉ các mặt hàng tất (vớ) theo yêu cầu. Chúng tôi thường xuyên cập nhật đem
                            đến cho khách hàng những sản phẩm mới nhất. Hiện nay cơ sở chúng tôi chuyên gia công, sản xuất
                            các loạt tất (vớ) chất lượng cao như: Tất nam, tất nữ, tất trẻ em,...
                        </p>
                        <a class="fw-bold text-decoration-none text-danger"
                            style="float: right; margin-right: 20px; font-size: 16px">Xem thêm...</a>
                    </div>
                    <div class="col-12 col-md-5">
                        <img src="{{ asset('images/banner-main.jpg') }}" width="100%" style="border-radius: 7px" />
                    </div>
                </div>
            </div>
            <h2 class="bg-danger text-uppercase fw-bold text-white text-center my-4 py-2">ĐƯỜNG ĐI TỚI XƯỞNG</h2>
        @endsection
