<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'clients';

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
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

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
    * Inverse
    */
    public function user()
    {
        /* return $this->hasOne('App\Phone', 'foreign_key_of_the_client', 'local_key_of_user') // sakto nani */
        return $this->belongsTo( User::class , 'user_id', 'id' );
    }

    public function clearances()
    {
        /* return $this->hasOne('App\Phone', 'foreign_key_of_the_clearance', 'local_key_of_the_client') // sakto nani */
        return $this->hasMany(Clearance::class, 'client_id', 'id' );
    }

    public function scopefindUserID($query, $id)
    {
        if($id)
        {
            return $query->where('user_id', $id);
        }
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
