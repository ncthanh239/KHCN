<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detai extends Model
{
    protected $table = 'detais';
    protected $fillable = ['id', 'ma', 'tendt', 'muctieu', 'ketqua', 'donvith', 'capth', 'trangthai', 'chunhiem', 'loaidt', 'linhvuc'];

    public static function store($data){
    	$detai = Detai::create($data);
    	return $detai;
    }
}
