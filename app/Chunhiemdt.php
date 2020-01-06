<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chunhiemdt extends Model
{
   	protected $table = 'chunhiemdts';
   	protected $fillable = ['id','hoten','tendangnhap', 'donvi', 'password'];

   	public static function store($data){
   		$chunhiem = Chunhiemdt::create($data);
   		return $chunhiem;
   	}
}
