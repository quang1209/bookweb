<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chitiethoadon;
use App\Models\Hoadon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonhangController extends Controller
{
    public function view(){
        $chitiethoadon = DB::table('chitiethoadon')
        ->leftJoin('sach', 'chitiethoadon.id_sach', '=', 'sach.id')
        ->leftJoin('hoadon', 'chitiethoadon.id_hoadon', '=', 'hoadon.id_hoadon')
        ->select('chitiethoadon.*','sach.ten','hoadon.id_hoadon')
        ->get();

        return view('admin.danhsachhoadon',['chitiethoadon' => $chitiethoadon]);
    }
    public function viewhoadon($id){
        $hoadon = DB::table('hoadon')
            ->leftJoin('chitiethoadon', 'chitiethoadon.id_hoadon', '=', 'hoadon.id_hoadon')
            ->select('hoadon.*')
            ->where('hoadon.id_hoadon','=',$id)
            ->first();
        return view('admin.detailhoadon',['hoadon'=>$hoadon]);
    }
}
