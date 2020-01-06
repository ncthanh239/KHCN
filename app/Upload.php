<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
   protected $fillable = ['id', 'tieude', 'file','path'];

   public static function store($data){
   	$upload = Upload::create($data);
   	return $data;
   }
}
