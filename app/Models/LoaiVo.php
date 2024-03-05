<?php

namespace App\Models;

use Exception;
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
    public function create(LoaiVo $loaivo_new)
    {
        try {
            $loaivo_exist = LoaiVo::where('TenLoai', $loaivo_new->TenLoai)->exists();
            if ($loaivo_exist) {
                return 'Đã tồn tại';
            }
            $loaivo_new->save();
            return 'Thêm thành công';
        } catch (Exception $ex) {
            return 'Lỗi thêm loại';
        }
    }
    public function update_item(LoaiVo $loaivo_update)
    {
        try {

            $loaivo_exist = LoaiVo::find($loaivo_update->id);
            if ($loaivo_exist) {
                if ($loaivo_exist->TenLoai == $loaivo_update->TenLoai) {
                    return 'Tên loại trùng, không cập nhật';
                }
                $loaivo_exist->TenLoai = $loaivo_update->TenLoai;
                $loaivo_exist->save();
                return 'Đã cập nhật';
            }
            return 'Không tìm thấy loại vớ';
        } catch (Exception $ex) {
            return 'Lỗi cập nhật';
        }
    }
    public function delete_item($id)
    {
        try {
            $loaivo_exist = LoaiVo::find($id);
            if ($loaivo_exist) {
                $loaivo_exist->delete();
                return 'Đã xóa loai vớ: ' . $loaivo_exist->TenLoai . '(' . $loaivo_exist->id . ')';
            }
            return 'Không tìm thấy loại vớ';
        } catch (Exception $ex) {
            return 'Lỗi xóa loại vớ';
        }
    }
}
