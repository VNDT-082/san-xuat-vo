<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;
    protected $table = 'tintuc';
    public function chitiettintuc()
    {
        return $this->hasMany(ChiTietTinTuc::class, 'tintuc_id', 'id');
    }
    public function get_all()
    {
        return TinTuc::all();
    }
    public function get_one_by_id($id)
    {
        return TinTuc::find($id);
    }
    public function get_top5_new()
    {
        return TinTuc::orderBy('created_at', 'desc')->take(5)->get();
    }
}
