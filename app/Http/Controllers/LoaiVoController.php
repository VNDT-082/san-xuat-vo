<?php

namespace App\Http\Controllers;

use App\Models\LoaiVo;
use Illuminate\Http\Request;

class LoaiVoController extends Controller
{
    //
    public function __construct()
    {
    }
    public function index()
    {
        $loaivo = new LoaiVo();
        $loaivo->TenLoai = 'Default';
        $loaivo->save();
    }
    public function getAll()
    {
        $LoaiVos = LoaiVo::all();
        return $LoaiVos;
    }
}
