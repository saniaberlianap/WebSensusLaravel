<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Keluarga;

class Keluarga extends Model
{
    protected $fillable = [
    	'ayah', 'ibu', 'alamat'
    ];

    public function crud(){
    	return $this->hasMany(Crud::class);
    }
}
