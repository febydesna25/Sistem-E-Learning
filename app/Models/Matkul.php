<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function matkul($value='')
    {
    	return $this->belongsTo(Matkul::class);
    }

}
