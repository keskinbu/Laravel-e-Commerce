<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_images';
    protected  $guarded = array();


    public function scopeActives($query)
    {
        return $query->where('is_active', '=', 1);
    }
}
