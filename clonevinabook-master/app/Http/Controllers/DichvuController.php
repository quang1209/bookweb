<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\dichvu;
use Illuminate\Http\Request;

class DichvuController extends Controller
{
    public function index(){
        $dichvu = dichvu::all();
        return view('admin.qlydichvu', ['dichvu' => $dichvu]);
    }
    public function create(){
        return view('admin.dichvucreate');
    }
    public function store(Request $request){
        $data = $request->validate([
            'tendv' => 'required',
            'gia'=>'required']);
        $newProduct = dichvu::create($data);


        return redirect(route('dichvu.index'));
    }
    public function edit(dichvu $dichvu){
        return view('admin.dichvuedit',['dichvu'=>$dichvu]);
    }
    public function update(dichvu $dichvu,Request $request){
        $data = $request->validate([
            'tendv' => 'required',
            'gia'=>'required']);
        $dichvu->update($data);
        return redirect(route('dichvu.index'))->with('success', 'Product Updated Succesffully');
    }
    public function delete(dichvu $dichvu){
        $dichvu->delete();
        return redirect(route('dichvu.index'))->with('success', 'Product deleted Succesffully');
    }
}
