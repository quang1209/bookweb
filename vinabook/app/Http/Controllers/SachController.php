<?php

namespace App\Http\Controllers;
use App\Models\nhaxb;
use App\Http\Controllers\Controller;
use App\Models\sach;
use App\Models\theloai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SachController extends Controller
{
    public function index(){
        $sach = DB::table('sach')
            ->leftJoin('nhaxb', 'sach.idnhaxb', '=', 'nhaxb.id')
            ->leftJoin('theloai', 'sach.id_theloai', '=', 'theloai.id')
            ->select('sach.*','nhaxb.name','theloai.theloai')
            ->orderBy('sach.ten')
            ->get();
        return view('admin.qlysach',['sach'=>$sach]);
    }
    public function create(){
        $nhaxb = nhaxb::all();
        $theloai = theloai::all();
        return view('admin.sachcreate', ['nhaxb' => $nhaxb,'theloai'=>$theloai]);
    }
    public function store(Request $request){
       $data = $request->validate([
        'ten' => 'required',
        'gia' => 'required',
        'hinhanh.*' => 'required|image|mimes:,jpeg,gif,svg|max:1000',
        'nhaphathanh' => 'required',
        'mota' => 'required',
        'date' => 'required',
        'giakhuyenmai' => 'required',
        'tacgia' => 'required',
        'giayphep' => 'required',
        'ngonngu' => 'required',
        'kichthuoc' => 'required',
        'sotrang' => 'required',
        'khoiluong' => 'required',
        'dinhdang' => 'required',
        'idnhaxb'=> 'required',
        'id_theloai'=>'required']);
        $img=$request->hinhanh;
        $imgName= time().'_'.$img->getClientOriginalName();
        $img->move(public_path('images'),$imgName);
        $data['hinhanh']=$imgName;
        $newProduct = sach::create($data);
        return redirect(route('sach.index'));
    }
    public function edit(sach $sach){
        $nhaxb = nhaxb::all();
        $theloai = theloai::all();
        return view('admin.sachedit',['sach'=>$sach,'nhaxb'=>$nhaxb,'theloai'=>$theloai]);
    }
    public function update(sach $sach,Request $request){
        $data = $request->validate([
            'ten' => 'required',
            'gia' => 'required',
            'hinhanh.*' => 'required|image|mimes:,jpeg,gif,svg|max:1000',
            'nhaphathanh' => 'required',
            'mota' => 'required',
            'date' => 'required',
            'giakhuyenmai' => 'required',
            'tacgia' => 'required',
            'giayphep' => 'required',
            'ngonngu' => 'required',
            'kichthuoc' => 'required',
            'sotrang' => 'required',
            'khoiluong' => 'required',
            'dinhdang' => 'required',
            'idnhaxb'=> 'required',
            'id_theloai'=>'required']);
            $img=$request->hinhanh;
            $imgName= $img->getClientOriginalName();
            $data['hinhanh']=$imgName;
            $sach->update($data);
        return redirect(route('sach.index'))->with('success', 'Product Updated Succesffully');
    }
    public function delete(sach $sach){
        $sach->delete();
        return redirect(route('nhaxb.index'))->with('success', 'Product deleted Succesffully');
    }
}
