<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoadon extends Model
{
    use HasFactory;
    protected $table = 'hoadon';
    protected $primaryKey = 'id_hoadon';
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $fillable = ['hovaten','sodiethoai','diachi','hinhthucthanhtoan','thanhtien','note'];
}
