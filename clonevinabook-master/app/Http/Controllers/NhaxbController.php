<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\nhaxb;
use Illuminate\Http\Request;

class NhaxbController extends Controller
{
    //
    public function index(){
        $nhaxb = nhaxb::all();
        return view('admin.qlynhaxb', ['nhaxb' => $nhaxb]);
    }
    public function create(){
        return view('admin.nhaxbcreate');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',]);
        $newProduct = nhaxb::create($data);

        return redirect(route('nhaxb.index'));

    }
    public function edit(nhaxb $nhaxb){
        return view('admin.nhaxbedit',['nhaxb'=>$nhaxb]);
    }
    public function update(nhaxb $nhaxb,Request $request){
        $data = $request->validate([
            'name' => 'required',]);
        $nhaxb->update($data);
        return redirect(route('nhaxb.index'))->with('success', 'Product Updated Succesffully');
    }
    public function delete(nhaxb $nhaxb){
        $nhaxb->delete();
        return redirect(route('nhaxb.index'))->with('success', 'Product deleted Succesffully');
    }
}
