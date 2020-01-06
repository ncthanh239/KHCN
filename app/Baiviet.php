<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baiviet extends Model
{
    protected $table = 'baiviets';
    protected $fillable = ['id', 'tenbv', 'tomtat', 'noidung', 'trangthai', 'path'];

    public static function store($data){
    	$baiviet = Baiviet::create($data);
    	return $baiviet;
    }
}
