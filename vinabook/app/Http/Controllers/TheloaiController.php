<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\theloai;
use Illuminate\Http\Request;

class TheloaiController extends Controller
{
    //
    public function index(){
        $theloai = theloai::all();
        return view('admin.qlytheloai', ['theloai' => $theloai]);
    }
    public function create(){
        return view('admin.theloaicreate');
    }
    public function store(Request $request){
        $data = $request->validate([
            'theloai' => 'required',]);
        $newProduct = theloai::create($data);
        return redirect(route('theloai.index'));

    }
    public function edit(theloai $theloai){
        return view('admin.theloaiedit',['theloai'=>$theloai]);
    }
    public function update(theloai $theloai,Request $request){
        $data = $request->validate([
            'theloai' => 'required',]);
        $theloai->update($data);
        return redirect(route('theloai.index'))->with('success', 'Product Updated Succesffully');
    }
    public function delete(theloai $theloai){
        $theloai->delete();
        return redirect(route('theloai.index'))->with('success', 'Product deleted Succesffully');
    }
}
