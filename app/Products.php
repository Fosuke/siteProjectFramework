<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $guarded =[];
    public function productImages(){
    	return $this->hasMany(productImages::class);
    }
}
