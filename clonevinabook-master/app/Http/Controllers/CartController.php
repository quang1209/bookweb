<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hoadon;
use App\Models\sach;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $hoadon=Hoadon::all();
        return view('giohang',['hoadon'=>$hoadon]);
    }
    public function addtoCart($id){
        $product = sach::findOrFail($id);
        $cart = session()->get('cart',[]);
        if(isset($cart[$id])){
            $cart[$id]['soluong']++;
        }else{
            $cart[$id] =[
                'id'=>$product->id,
                'ten'=>$product->ten,
                'gia'=>$product->giakhuyenmai,
                'hinhanh'=>$product->hinhanh,
                'soluong'=> 1
            ];
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success','product add successfully');
    }
    public function remove(Request $request){
        if($request->id){
            $cart=session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
        }
        return redirect()->back()->with('success','product removed successfully');
    }
    public function increaseCart(Request $request){
        if($request->id){
                $cart=session()->get('cart');
                $cart[$request->id]['soluong']++;
                session()->put('cart',$cart);
        } return redirect()->back();
    }
    public function decreaseCart(Request $request){
        if($request->id){
            $cart=session()->get('cart');
            if($cart[$request->id]['soluong']==1){
                return;
            }
                $cart[$request->id]['soluong']--;
                session()->put('cart',$cart);
        } return redirect()->back();
    }
}
