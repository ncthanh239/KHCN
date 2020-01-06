<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baiviet;
use App\Http\Requests\StoreBaivietRequest;
use App\Http\Requests\UpdateBaivietRequest;
use Input,File;
use Illuminate\Support\Facades\Storage;

class BaivietController extends Controller
{
    public function baiviet(){
    	//$baiviets = Baiviet::where('trangthai','Bài đã đăng')->get();
    	$baiviets = Baiviet::all();
    	
    	return view('admin.baiviet.baiviet', ['baiviets'=>$baiviets]);
    }

    public function store(StoreBaivietRequest $request){


    	// dd($request->file('file')->getClientOriginalName());
    	$disk = 'public';
    	$path=$request->file('path')->storeAs('baiviet','bai-viet-'.time(), $disk);
    	// dd($path);
    	
    	$data['tenbv'] = $request->tenbv;
    	$data['tomtat'] = $request->tomtat;
    	$data['noidung'] = $request->noidung;
    	$data['trangthai'] = $request->trangthai;
    	$data['path'] = $path;


    	$baiviet = Baiviet::store($data);
    	return response()->json([
    		'error'=>false,
    		'data'=>$baiviet,
    	]);
    }

    public function edit($id){
    	$baiviet = Baiviet::find($id);
    	return response()->json([
    		'data'=>$baiviet,

    	]);
    }

    public function update(UpdateBaivietRequest $request, $id){
    	$disk = 'public';
    	// $filename = $request->file('path')->getClientOriginalName();

    	
    	
    	$path=$request->path->storeAs('baiviet','bai-viet-'.time(), $disk);
    	

    	$baiviet = Baiviet::find($id)->update($data);
    	return response()->json([
    		'tenbv'=>$request->tenbv,
    		'tomtat'=>$request->tomtat,
    		'noidung'=>$request->noidung,
    		'trangthai'=>$request->trangthai,
    		'path'=>$path,
    	]);
    }

    public function delete($id){
    	Baiviet::find($id)->delete();
    	return response()->json([
    		'message'=>'Xoa thanh cong'
    	]);
    }
}
