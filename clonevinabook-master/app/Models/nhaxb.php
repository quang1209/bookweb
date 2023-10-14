<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nhaxb extends Model
{
    use HasFactory;
    protected $table = 'nhaxb';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $fillable = ['name'];

}
