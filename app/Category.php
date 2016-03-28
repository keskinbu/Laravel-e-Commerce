<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';
    protected  $guarded = array();

    public static $rules = [
        'create'=>[
            'name' => 'max:70|required|unique:categories',
            'parent_id' => 'required',
            'image' => '',
            'slug' => 'unique:categories',
            'is_active' => 'required',
        ]

    ];

    protected $fillable = ['name','parent_id','image','slug','is_active'];


    public function scopeActives($query)
    {
        return $query->where('is_active', '=', 1);
    }
}
