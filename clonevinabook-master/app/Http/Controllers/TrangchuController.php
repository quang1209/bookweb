<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrangchuController extends Controller
{
    public function index(){
        $sachbanchay = DB::table('sach')
            ->leftJoin('nhaxb', 'sach.idnhaxb', '=', 'nhaxb.id')
            ->leftJoin('theloai', 'sach.id_theloai', '=', 'theloai.id')
            ->select('sach.*','nhaxb.name','theloai.theloai')
            ->where('theloai.theloai','Bán chạy')
            ->get();
        $sachvh = DB::table('sach')
            ->leftJoin('nhaxb', 'sach.idnhaxb', '=', 'nhaxb.id')
            ->leftJoin('theloai', 'sach.id_theloai', '=', 'theloai.id')
            ->select('sach.*','nhaxb.name','theloai.theloai')
            ->where('theloai.theloai','Văn học')
            ->get();
        $tapchi = DB::table('sach')
            ->leftJoin('nhaxb', 'sach.idnhaxb', '=', 'nhaxb.id')
            ->leftJoin('theloai', 'sach.id_theloai', '=', 'theloai.id')
            ->select('sach.*','nhaxb.name','theloai.theloai')
            ->where('theloai.theloai','Tạp chí')
            ->get();
        $sachdaytre = DB::table('sach')
            ->leftJoin('nhaxb', 'sach.idnhaxb', '=', 'nhaxb.id')
            ->leftJoin('theloai', 'sach.id_theloai', '=', 'theloai.id')
            ->select('sach.*','nhaxb.name','theloai.theloai')
            ->where('theloai.theloai','Nuôi dạy trẻ')
            ->get();
        $sachthieunhi = DB::table('sach')
            ->leftJoin('nhaxb', 'sach.idnhaxb', '=', 'nhaxb.id')
            ->leftJoin('theloai', 'sach.id_theloai', '=', 'theloai.id')
            ->select('sach.*','nhaxb.name','theloai.theloai')
            ->where('theloai.theloai','Thiếu nhi')
            ->get();
        $sachkynang = DB::table('sach')
            ->leftJoin('nhaxb', 'sach.idnhaxb', '=', 'nhaxb.id')
            ->leftJoin('theloai', 'sach.id_theloai', '=', 'theloai.id')
            ->select('sach.*','nhaxb.name','theloai.theloai')
            ->where('theloai.theloai','Kỹ năng')
            ->get();
        $sachkinhte = DB::table('sach')
            ->leftJoin('nhaxb', 'sach.idnhaxb', '=', 'nhaxb.id')
            ->leftJoin('theloai', 'sach.id_theloai', '=', 'theloai.id')
            ->select('sach.*','nhaxb.name','theloai.theloai')
            ->where('theloai.theloai','Kinh tế')
            ->get();
        $sachtrongtuan = DB::table('sach')
            ->leftJoin('nhaxb', 'sach.idnhaxb', '=', 'nhaxb.id')
            ->leftJoin('theloai', 'sach.id_theloai', '=', 'theloai.id')
            ->select('sach.*','nhaxb.name','theloai.theloai')
            ->where('theloai.theloai','Trong tuần')
            ->get();
        return view('trangchu',['sachbanchay'=>$sachbanchay,'sachtrongtuan'=>$sachtrongtuan,'sachvh'=>$sachvh,'tapchi'=>$tapchi,'sachdaytre'=>$sachdaytre,'sachthieunhi'=>$sachthieunhi,'sachkynang'=>$sachkynang,'sachkinhte'=>$sachkinhte]);
    }
}
