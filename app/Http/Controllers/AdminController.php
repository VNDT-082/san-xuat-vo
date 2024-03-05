<?php

namespace App\Http\Controllers;

use App\Models\LoaiVo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public $data = [];
    private $loaivos;
    public function __construct()
    {
        $this->loaivos = new LoaiVo();
    }
    public function index()
    {
        $this->data['title'] = 'Trang quản trị';
        return view('admins.home', $this->data);
    }
    public function loai_vo()
    {
        $this->data['title'] = 'Quản lý loại vớ';
        $this->data['loaivos'] = $this->loaivos->getAll();
        return view('admins.loaivo', $this->data);
    }
    public function post_loai_vo(Request $request)
    {
        try {
            $validatedData = $request->validate(['TenLoai' => 'required']);
            $loaivo_insert = new LoaiVo();
            $loaivo_insert->TenLoai = $request->TenLoai;
            $ket_qua = $this->loaivos->create($loaivo_insert);
            return redirect()->route('admin_loai_vo')->with('message', $ket_qua);
        } catch (Exception $ex) {
        }
    }
    public function put_loai_vo(Request $request)
    {
        try {
            $validatedData = $request->validate(['TenLoai' => 'required']);
            $loaivo_update = new LoaiVo();
            $loaivo_update->id = $request->id;
            $loaivo_update->TenLoai = $request->TenLoai;
            $ket_qua = $this->loaivos->update_item($loaivo_update);
            //dd($ket_qua);
            return redirect()->route('admin_loai_vo')->with('message', $ket_qua);
        } catch (Exception $ex) {
        }
    }

    public function delete_loai_vo($id)
    {
        try {
            $ket_qua = $this->loaivos->delete_item($id);
            return redirect()->route('admin_loai_vo')->with('message', $ket_qua);
        } catch (Exception $ex) {
        }
    }
}
