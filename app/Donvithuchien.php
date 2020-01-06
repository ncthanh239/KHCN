<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donvithuchien extends Model
{
   	protected $fillable = ['id', 'ten_dv', 'diachi', 'dienthoai','email'];

   	public static function store($data){
   		$donvi = Donvithuchien::create($data);
   		return $donvi;
   	}
}
