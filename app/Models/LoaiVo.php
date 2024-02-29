<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoaiVo extends Model
{
    use HasFactory;
    protected $table = 'loaivo';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';

    public function getAll()
    {
        return DB::table('loaivo')->get();
    }
    public function get_all_different_default()
    {
        return DB::table('loaivo')->where('TenLoai', '<>', 'Default')->get();
    }
}
