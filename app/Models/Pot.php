<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pot extends Model
{
    use HasFactory;
    // dieu chinh ten bang
    // protected $table = "post";
    // // doi lai ten khoa chinh
    // protected $primaryKey = "Ten Khoa Chinh khac";
    // // khai báo kiểu dữ liệu cho khóa chính mới
    // protected $keyType = "kiểu dữ liệu";
    // // tắt tăng tự động cho khóa chính
    // public $incrementing = false;
    // // diều chỉnh kết nối DB
    // protected $connection = "ten ket nối";
    protected $fillable = ['title', 'content'];
}
