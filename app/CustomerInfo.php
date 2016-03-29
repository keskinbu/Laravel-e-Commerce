<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    protected  $guarded = array();

    public static $rules = [
        'create'=>[
            'title' => 'max:70|required'
        ]

    ];

    protected $fillable = [
        'title', 'first_name', 'last_name', 'phone', 'id_no', 'email', 'city', 'district', 'address', 'type',
    ];


    public function scopeActives($query)
    {
        return $query->where('is_active', '=', 1);
    }
}
