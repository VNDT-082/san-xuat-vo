<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HinhAnh extends Model
{
    use HasFactory;
    protected $table = 'hinhanh';
    public function get_all_by_id($id)
    {
        return DB::table('hinhanh')->where('id', '=', $id)->get();
    }
}
