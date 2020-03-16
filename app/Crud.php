<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = [
    	'nama', 'gender','keluarga_id', 'image'
    ];

    protected $table = 'sample_data';

    public function keluarga(){
    	return $this->belongsTo(Keluarga::class);
    }

}
