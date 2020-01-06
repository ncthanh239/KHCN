<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donvidt;
use App\Http\Requests\StoreDonviRequest;
use App\Http\Requests\UpdateDonviRequest;

class DonvithController extends Controller
{
    public function donvithuchien(){
    	$donvis = Donvidt::all();
    	return view('admin.detai.donvith',['donvis'=>$donvis]);
    }

   

    public function store(StoreDonviRequest $request){
    	$data['ten_dv'] = $request->ten_dv;
    	$data['diachi'] = $request->diachi;
    	$data['dienthoai'] =$request->dienthoai;
    	$data['email'] = $request->email;
        $data['linhvuc'] = $request->linhvuc;
    	$donvi = Donvidt::store($data);
    	return response()->json([
    		'error'=>false,
    		'data'=>$donvi,
    	]);
    }

    public function edit($id){
    	$donvi = Donvidt::find($id);
    	return response()->json([
    		'data'=>$donvi
    	]);
    }

    public function update(UpdateDonviRequest $request, $id){
    	$data['ten_dv'] = $request->ten_dv;
    	$data['diachi'] = $request->diachi;
    	$data['dienthoai'] =$request->dienthoai;
    	$data['email'] = $request->email;
        $data['linhvuc'] = $request->linhvuc;
    	$donvi = Donvidt::find($id)->update($data);
    	return response()->json([
    		'data'=>$donvi
    	]);
    }

    public function delete($id){
    	Donvidt::find($id)->delete();
    	return response()->json([
    		'message'=>'Xoa thanh cong'
    	]);
    }


}
