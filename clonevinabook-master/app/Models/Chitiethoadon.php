<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chitiethoadon extends Model
{
    use HasFactory;
    protected $table = 'chitiethoadon';
    protected $primaryKey = 'id_chitiethoadon';
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $fillable = ['id_hoadon','id_sach','soluong','gia','thanhtien'];
}
