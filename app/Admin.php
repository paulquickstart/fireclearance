<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use SoftDeletes;

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'admins';

    /**
     * id guarded
     *
     * @var param
    */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'first_name',
        'last_name', 
        'phone_number',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];

    public function canDelete()
    {
        // do not allow user to delete his own account
        if (belongs_to_logged_in_user($this->id))
        {
            return false;
        }

        return true;
    }

}
