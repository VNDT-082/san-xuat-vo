<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vo extends Model
{
    use HasFactory;
    protected $table = 'vo';
    public function get_all()
    {
        return DB::table('vo')->get();
    }
}
