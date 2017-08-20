<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    public function Products () {
            return $this->belongsTo('Products', 'product_id');
        }
}
