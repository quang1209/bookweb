<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    use HasFactory;
    protected $table = 'theloai';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $fillable = ['theloai'];
}
