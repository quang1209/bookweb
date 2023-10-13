<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sach extends Model
{
    use HasFactory;
    protected $table = 'sach';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $fillable = [
        'ten',
        'gia',
        'hinhanh',
        'nhaphathanh',
        'mota',
        'date',
        'giakhuyenmai',
        'tacgia',
        'giayphep',
        'ngonngu',
        'kichthuoc',
        'sotrang',
        'khoiluong',
        'dinhdang',
        'idnhaxb',
        'id_theloai',
    ];
}
