<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chunhiemdt;
use App\Donvidt;
use App\Http\Requests\StoreChunhiemRequest;
use App\Http\Requests\UpdateChunhiemRequest;
class ChunhiemdtController extends Controller
{
    public function chunhiemdetai(){
    	$chunhiems = Chunhiemdt::all();
    	$donvis = Donvidt::all();
    	return view('admin.detai.chunhiemdt', ['chunhiems'=>$chunhiems],['donvis'=>$donvis]);
    }

    public function store(StoreChunhiemRequest $request){
    	$data['hoten'] = $request->hoten;
    	$data['tendangnhap'] = $request->tendangnhap;
    	$data['donvi'] =$request->donvi;
    	$data['password'] = $request->password;
    	$chunhiem = Chunhiemdt::store($data);
    	return response()->json([
    		'error'=>false,
    		'data'=>$chunhiem,
    	]);
    }

    public function delete($id){
    	Chunhiemdt::find($id)->delete();
    	return response()->json([
    		'message'=>'Xoa thanh cong'
    	]);
    }

    public function edit($id){
    	$chunhiem = Chunhiemdt::find($id);
    	return response()->json([
    		'data'=>$chunhiem
    	]);
    }

    public function update(UpdateChunhiemRequest $request, $id){
    	$data['hoten'] = $request->hoten;
    	$data['tendangnhap'] = $request->tendangnhap;
    	$data['donvi'] =$request->donvi;
    	$data['password'] = $request->password;
    	$chunhiem = Chunhiemdt::find($id)->update($data);
    	return response()->json([
    		'data'=>$chunhiem
    	]);
    }

   
}
