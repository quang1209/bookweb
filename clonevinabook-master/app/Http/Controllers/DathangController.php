<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Chitiethoadon;
use App\Models\Hoadon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DathangController extends Controller
{
    public function index($id){
        $hoadon = DB::table('hoadon')
            ->where('hoadon.id_hoadon','=',$id)
            ->first();
        return view('dathang',['hoadon' => $hoadon]);
    }
    public function create(){
        return view('dathangcreate');
    }
    public function store(Request $request){
        $data = $request->validate([
            'hovaten' => 'required',
            'sodiethoai' => 'required',
            'diachi' => 'required',
            'hinhthucthanhtoan' => 'required',
            'thanhtien'=>'nullable',
            'note'=>'nullable'
            ]);
            $cart=session()->get('cart');
            $tong = 0;
            foreach(session('cart') as $detail){
                $tong += $detail['gia'] * $detail['soluong'];
            }
            $data['thanhtien'] = $tong;
            $hoadon_id = DB::table('hoadon')->insertGetId($data);
            $newProduct = Hoadon::create($data);
            foreach($cart as $value){
            $chitiethoadon = new Chitiethoadon();
            $chitiethoadon->id_hoadon =$hoadon_id;
            $chitiethoadon->id_sach =$value['id'];
            $chitiethoadon->soluong =$value['soluong'];
            $chitiethoadon->gia = $value['gia'];
            $chitiethoadon->thanhtien= $tong;
            $chitiethoadon->save();
            }
        return redirect(route('order',$hoadon_id));
    }
    public function edit($id){
        $hoadon= Hoadon::find($id);
        return view('dathangedit',['hoadon' => $hoadon]);
    }
    public function update(Request $request,$id){
        $data = $request->validate([
            'hovaten' => 'required',
            'sodiethoai' => 'required',
            'diachi' => 'required',
            'hinhthucthanhtoan' => 'required',
            'thanhtien'=>'nullable',
            'note'=>'nullable'
            ]);
            $cart=session()->get('cart');
            $tong = 0;
            foreach(session('cart') as $detail){
                $tong += $detail['gia'] * $detail['soluong'];
            }
            $data['thanhtien'] = $tong;
            $hoadon= Hoadon::find($id);
            $hoadon->hovaten = $request->hovaten;
            $hoadon->sodiethoai = $request->sodiethoai;
            $hoadon->diachi = $request->diachi;
            $hoadon->hinhthucthanhtoan = $request->hinhthucthanhtoan;
            $hoadon->note = $request->note;
            $hoadon->update();
            foreach($cart as $value){
            $chitiethoadon = new Chitiethoadon();
            $chitiethoadon->id_hoadon =$id;
            $chitiethoadon->id_sach =$value['id'];
            $chitiethoadon->soluong =$value['soluong'];
            $chitiethoadon->gia = $value['gia'];
            $chitiethoadon->thanhtien= $tong;
            $chitiethoadon->update();
            }
        return redirect(route('order',$id));
    }
    public function xacnhan(Request $request){
        $request->session()->forget('cart');
         return redirect(route('trangchu.index'))->with('success','Da xac nhan don hang');
    }
}
