<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use Input,File;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function tailieu(){
    	$uploads = Upload::all();
    	return view('admin.upload.upload', ['uploads'=>$uploads]);
    }

    public function getTaiLieu(Request $request){
    	$disk = 'public';
    	$data['tieude'] = $request->tieude;
    	$filename = $request->file('file')->getClientOriginalName();
    	
    	
    	$path=$request->file->storeAs('upload','tai-lieu-'.time(), $disk);

    	
    	
    	$upload = Upload::create([
    		'tieude'=>$request->tieude,
    		'file'=>$filename,
    		'path'=>$path,
    	]);
    	
    	return redirect()->action('UploadController@tailieu');
    	
    	
    	
    }

    public function download($id){
    	$dl = Upload::find($id);
    	return Storage::download('public/'.$dl->path, $dl->file);
    }

    public function delete($id){
    	$dl=Upload::find($id);
    	Storage::delete('public/'.$dl->path, $dl->file);
    	Upload::find($id)->delete();
    	return response()->json(['message'=>'Xoa thanh cong']);
    }
}
