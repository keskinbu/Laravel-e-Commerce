<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customers';
    protected  $guarded = array();

    public static $rules = [
        'create'=>[
            'name' => 'max:70|required',
            'email' => 'required|max:70|unique:customers',
            'password' => 'required',
        ]

    ];

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeActives($query)
    {
        return $query->where('is_active', '=', 1);
    }
}
