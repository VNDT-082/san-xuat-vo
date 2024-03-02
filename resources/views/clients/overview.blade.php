@extends('layouts.client')

@section('title')
    {{ $title }}
@endsection

@section('contents')
    <div class="row px-5" style="background-color: rgb(213, 219, 219); height: 40px;">
        <p class="fw-bold text-uppercase my-auto"> <i class="fa fa-home"></i> » Chi tiết</p>
    </div>
    <div class="row px-5">
        <div class="col-sx-12 col-md-3 text-center d-none d-md-block">
            <h2 class="bg-danger text-danger text-white">DANH MỤC SẢN PHẨM</h1>
        </div>
        <div class="col-sx-12 col-md-9">
            <h4 class="text-danger pt-3" style="font-size: 20px">{{ $overview['title'] }}</h4>
            <p>{{ $overview['description'] }}</p>
            <img src="{{ asset('images/' . $overview_filename) }}" width="70%" class="my-3"
                style="margin-left: 15%; border-radius: 7px" />
            @switch($overview_id)
                @case(0)
                    <p>Tất 3D của bé: có 3 loại dành cho các bé từ 0-3 tuổi; 3-7 tuổi; 7-12 tuổi.</p>
                    <p>Tất trơn: Inbox <b>số điện thoại: 0916 973 649</b> để có giá sỉ. Tất trơn một màu,
                        chất thấm hút mồ hôi, có nhiều lựa chọn cho khách.</p>
                @break

                @case(1)
                    <p>Mọi chi tiết xin vui lòng liên hệ:</p>
                    <b>XƯỞNG GIA CÔNG TẤT - VỚ <br />CƠ SỞ SẢN XUẤT VỚ TIẾN PHÁT</b>
                    <p>Địa chỉ: F9/9/2 - Ấp 6 - Xã Vĩnh Lộc A - Bình Chánh - TP. HCM</p>
                    <p>Hotline: 0916 973 649</p>
                    <p>Email: luuthanhnhan79@gmail.com</p>
                    <p>Website: tatvo.net<br />sanxuattatvo.com</p>
                @break

                @case(2)
                    <p><b>Xưởng gia công tất (vớ) - Cơ sở sản xuất vớ Tiến Phát</b> chuyên sản xuất các loại vớ tất,
                        sản phẩm vớ rất đa dạng về mẫu mã cũng như giá thành</p>
                    <b>Vớ chạy bằng sợi Spandex, Polyeseter, PE... màu sắc thì sám , da vàng, da nâu, ...vv.
                        kích thước: ngắn, gói, đùi.</b>
                    <p>Để xem mẫu bạn đến địa chỉ: F9/9/2 - Ấp 6 - Xã Vĩnh Lộc A - Bình Chánh - TP. HCM.
                        Hotline: 0916 973 649</p>
                    <p>Lưu ý: Bạn gọi điện thoại trước khi đến để xem được nhiều mẫu vớ hơn nhé.</p>
                @break

                @case(3)
                    <p>Bên cạnh đó chúng tôi chuyên bỏ sỉ với số lượng, mẫu mã theo yêu cầu, thời gian lấy hàng nhanh chóng.</p>
                    <b>Quý khách có nhu cầu, vui lòng liên hệ theo số
                        <b class="text-danger">Hotline: 0916 973 649</b>
                    </b>
                @break

                @default
                    <p>Bên cạnh đó chúng tôi chuyên bỏ sỉ với số lượng, mẫu mã theo yêu cầu, thời gian lấy hàng nhanh chóng.</p>
                    <b>Quý khách có nhu cầu, vui lòng liên hệ theo số
                        <b class="text-danger">Hotline: 0916 973 649</b>
                    </b>
            @endswitch
            <div class="row">
                <i class="fa fa-facebook-square my-3" style="color: blue"> <a target="_blank"
                        href="https://developers.facebook.com/products/social-plugins/comments/?utm_campaign=social_plugins&amp;utm_medium=offsite_pages&amp;utm_source=comments_plugin">Plugin
                        bình luận trên Facebook</a></i>

                <h2 class="fw-bold text-danger">BÀI VIẾT LIÊN QUAN</h2>
                <a>
                    <h5>Sỉ - lẻ các loại tất</h5>
                </a>
                <a>
                    <h5>Chuyên sỉ lẻ các loại vớ tất </h5>
                </a>
                <a>
                    <h5>Gia công tất (vớ) theo yêu cầu</h5>
                </a>
            </div>
        </div>

    </div>
@endsection
