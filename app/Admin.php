<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'first_name',
        'last_name', 
        'password',
        'phone_number',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'updated_at'
    ];

}
