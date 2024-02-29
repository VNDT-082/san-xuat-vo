<?php

namespace App\Http\Controllers;

use App\Models\HinhAnh;
use App\Models\LoaiVo;
use App\Models\Vo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $loaivos;
    private $vos;
    private $hinhanhs;
    public $data = [];
    public function __construct()
    {
        $this->loaivos = new LoaiVo();
        $this->vos = new Vo();
        $this->hinhanhs = new HinhAnh();
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
        var_dump($this->data['vos']);
        return view('clients.home', $this->data);
    }
}