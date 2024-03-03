<?php

namespace App\Http\Controllers;

use App\Models\HinhAnh;
use App\Models\LoaiVo;
use App\Models\TinTuc;
use App\Models\Vo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $loaivos;
    private $vos;
    private $hinhanhs;
    private $tintucs;
    public $data = [];
    public function __construct()
    {
        $this->loaivos = new LoaiVo();
        $this->vos = new Vo();
        $this->hinhanhs = new HinhAnh();
        $this->tintucs = new TinTuc();

        $overview1 = ['title' => 'Sỉ - lẻ các loại tất', 'description' => 'Xưởng gia công tất (vớ) - Cơ sở sản xuất vớ Tiến Phát chuyên sỉ - lẻ các loại tất: Tất 3D của bé, tất 3D nữ, tất hoạt hình, tất ghép ngộ nghĩnh, tất trơn một màu, tất 7 ngày nam nữ.        Tất cổ ngắn vừa trên mắt cá chân chiều dài 24cm. Chất liệu cotton co giãn, có khả năng thấm hút mồ hôi nhanh.'];
        $overview2 = ['title' => 'Vớ trơn cổ ngắn - giá sỉ​, giá tốt', 'description' => 'Xưởng gia công tất (vớ) - Cơ sở sản xuất vớ Tiến Phát là cơ sở sản xuất các loại vớ, đặc biệt là vớ trơn cổ ngắn - giá sỉ. Chất liệu bền đẹp, mẫu mã đa dạng, nhiều chủng loại. Chúng tôi luôn tự tin mang đến cho các quý khách hàng có nhiều sự lựa chọn ưng ý nhất.'];
        $overview3 = ['title' => 'Chuyên sỉ lẻ các loại vớ tất', 'description' => 'Bạn đang tìm nguồn hàng vớ tất với số lượng lớn, giá rẻ nhất để giao sỉ cho các mối ở chợ hoặc buôn các mối sỉ ở tỉnh.
        Bạn sợ thông qua trung gian lời ít hoặc sản phẩm giá rẻ nhưng kém chất lượng, hàng hóa không ít không ổn định.    
        Nếu đó là những vấn đề của bạn thì đừng lo, khi đến với Xưởng gia công tất (vớ) - Cơ sở sản xuất vớ Tiến Phát bạn sẽ có nguồn hàng uy tính chất lượng và giá rẻ nhất (vì không phải qua trung gian)'];
        $overview4 = ['title' => 'Gia công tất (vớ) theo yêu cầu', 'description' => 'Xưởng gia công tất (vớ) - Cơ sở sản xuất vớ Tiến Phát cam kết cung cấp các sản phẩm uy tín nhất, chất lượng nhất tới người tiêu dùng.
        Các sản phẩm tất (vớ) nam, nữ, quần tất thời trang nữ, trẻ em được gia công, sản xuất với nhiều mẫu mã đẹp, đa dạng, chất lượng tốt, giá rẻ.'];

        $array_overview = [$overview1, $overview2, $overview3, $overview4];
        $this->data['overviews'] = json_encode($array_overview);
    }

    // public function navbar()
    // {
    //     $loaivos = $this->loaivos->get_all_different_default();
    //     return view('layouts.navbar', compact('loaivos'));
    // }
    public function index()
    {
        $this->data['title'] = 'Trang chủ';
        $this->data['loaivos'] = $this->loaivos->get_all_different_default();
        $this->data['vos'] = $this->vos->get_all();
        for ($i = 0; $i < $this->data['vos']->count(); $i++) {
            $ds_hinh_anh = $this->hinhanhs->get_all_by_id($this->data['vos'][$i]->id);
        }



        // dd($this->data['vos'][0]->loaivo->TenLoai);
        return view('clients.home', $this->data);
    }

    public function chi_tiet_san_pham($id)
    {
        $vo = $this->vos->get_one_by_id($id);
        $this->data['loaivos'] = $this->loaivos->get_all_different_default();
        $this->data['title'] = $vo->TenVo;
        $this->data['vo'] = $vo;
        $this->data['topvo'] = $this->vos->get_top_san_pham();
        return view('clients.chitiet', $this->data);
    }

    public function overview($id)
    {
        $this->data['loaivos'] = $this->loaivos->get_all_different_default();
        $arr_overview = json_decode($this->data['overviews'], true);
        $this->data['overview'] =  $arr_overview[$id];
        $this->data['title'] = $this->data['overview']['title'];
        $overview_filename = $id + 1;
        $this->data['overview_filename'] = 'h' . $overview_filename . '.jpg';
        $this->data['overview_id'] = $id;
        return view('clients.overview', $this->data);
    }

    public function tin_tuc()
    {
        $this->data['loaivos'] = $this->loaivos->get_all_different_default();
        $this->data['title'] = 'tin tức - sự kiện';
        $this->data['tintucs'] = $this->tintucs->get_all();
        return view('clients.tintuc', $this->data);
    }
    public function chi_tiet_tin_tuc($id)
    {
        $this->data['loaivos'] = $this->loaivos->get_all_different_default();
        $this->data['tintuc'] = $this->tintucs->get_one_by_id($id);
        $this->data['title'] =  $this->data['tintuc']->TieuDe;
        $this->data['toptintucs'] = $this->tintucs->get_top5_new();
        return view('clients.chitiettintuc', $this->data);
    }
    public function dich_vu()
    {
        $this->data['loaivos'] = $this->loaivos->get_all_different_default();
        $this->data['title'] = 'Dịch vụ của chúng tôi';
        return view('clients.dichvu', $this->data);
    }
    public function gioi_thieu()
    {
        $this->data['loaivos'] = $this->loaivos->get_all_different_default();
        $this->data['title'] = 'Về chúng tôi';
        return view('clients.gioithieu', $this->data);
    }
    public function tuyen_dung()
    {
        $this->data['loaivos'] = $this->loaivos->get_all_different_default();
        $this->data['title'] = 'Tuyển dụng';
        return view('clients.tuyendung', $this->data);
    }
}
