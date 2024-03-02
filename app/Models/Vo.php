<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;

class Vo extends Model
{
    use HasFactory;
    protected $table = 'vo';
    protected $primary = 'id';

    public function loaivo()
    {
        return $this->belongsTo(LoaiVo::class, 'LoaiVo_id', 'id');
    }
    public function hinhanh()
    {
        return $this->hasMany(HinhAnh::class, 'Vo_id', 'id');
    }
    public function congty()
    {
        return $this->belongsTo(CongTy::class, 'CongTy_id', 'id');
    }

    public function get_all()
    {
        return Vo::all();
    }
    public function get_one_by_id($id)
    {
        return Vo::find($id);
    }
    public function get_top_san_pham()
    {
        return Vo::orderBy('created_at', 'desc')->take(4)->get();
    }
}
