<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detai;
use App\Chunhiemdt;
use App\Donvidt;
use App\Http\Requests\StoreDetaiRequest;
use App\Http\Requests\UpdateDetaiRequest;
class DetaiController extends Controller
{
    public function detai(){
    	$detais = Detai::all();
    	$donvis = Donvidt::all();
    	$chunhiems = Chunhiemdt::all();
    	
    	return view('admin.detai.detai', ['detais'=>$detais], ['donvis'=>$donvis], ['chunhiems'=>$chunhiems])->with(compact('chunhiems'));
    }

    public function themdetai(StoreDetaiRequest $request){
    	$data['ma'] = $request->ma;
    	$data['tendt'] = $request->tendt;
    	$data['muctieu'] = $request->muctieu;
    	$data['ketqua'] = $request->ketqua;
    	$data['donvith'] = $request->donvith;
    	$data['capth'] = $request->capth;
    	$data['trangthai'] = $request->trangthai;
    	$data['chunhiem'] = $request->chunhiem;
    	$data['loaidt'] = $request->loaidt;
    	$data['linhvuc'] = $request->linhvuc;
    	$detai = Detai::store($data);
    	return response()->json([
    		'error'=>false,
    		'data'=>$detai,
    	]);

    }

    public function edit($id){
        $detai = Detai::find($id);
        return response()->json([
            'data'=>$detai
        ]);
    }

    public function update(UpdateDetaiRequest $request, $id){
        $data['ma'] = $request->ma;
        $data['tendt'] = $request->tendt;
        $data['muctieu'] = $request->muctieu;
        $data['ketqua'] = $request->ketqua;
        $data['donvith'] = $request->donvith;
        $data['capth'] = $request->capth;
        $data['trangthai'] = $request->trangthai;
        $data['chunhiem'] = $request->chunhiem;
        $data['loaidt'] = $request->loaidt;
        $data['linhvuc'] = $request->linhvuc;

        $detai = Detai::find($id)->update($data);
        return response()->json([
            'data'=>$detai
        ]);
    }

    public function delete($id){
        Detai::find($id)->delete();
        return response()->json([
            'message'=>'Xoa thanh cong'
        ]);
    }


    public function detaiIndex(){
        $detais = Detai::paginate(3);
        // dd($detais);
        return view('trangchu.trangchu', ['detais'=>$detais]);
    }
}
