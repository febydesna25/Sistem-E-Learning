<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftara extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function matkul($value='')
    {
    	return $this->belongsTo(Matkul::class);
    }
    public function dosen($value='')
    {
    	return $this->belongsTo(Dosen::class);
    }

}
