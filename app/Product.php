<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';
    protected  $guarded = array();

    public static $rules = [
        'create'=>[
            'name' => 'max:70|required|unique:products',
            'code' => 'required',
            'meta_description' => 'max:160|required',
            'meta_tag' => 'max:160|required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'price1' => '',
            'price2' => '',
            'discount' => '',
            'stock' => '',
            'guarantee' => '',
            'is_active' => '',
            'main_product' => 'required',
        ]

    ];

    protected $fillable = ['name','code','meta_description','meta_tag','description','category','price','price1','price2','discount','stock','guarantee','main_product','is_active'];


    public function scopeActives($query)
    {
        return $query->where('is_active', '=', 1);
    }
}
