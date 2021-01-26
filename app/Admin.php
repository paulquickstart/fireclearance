<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\User;

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
     * dates fields proteced
     *
     * @var param
    */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Fields only fillable
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
        'deleted_at'
    ];

    /**
    * Inverse
    */
    public function users()
    {
        /* return $this->hasOne('App\Phone', 'foreign_key_of_the_client', 'local_key_of_user') // sakto nani */
        return $this->belongsTo( User::class , 'user_id', 'id' );
    }

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
