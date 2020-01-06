<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donvidt extends Model
{	
	protected $table = 'donvidts';
	protected $fillable = ['id', 'ten_dv', 'diachi', 'dienthoai','email', 'linhvuc'];

	public static function store($data){
		$donvi = Donvidt::create($data);
		return $donvi;
	}

	public static function updateData($id,$data){
		$donvi = Donvidt::find($id);
		$donvi->update($data);
		return $donvi;
	}
}
