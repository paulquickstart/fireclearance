<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ROLE_SUPER_ADMIN = 'super_admin';
  	const ROLE_ADMIN = 'admin';
  	const ROLE_CLIENT = 'client';

  	const SUPER_ADMIN = [
    	'id'      => 1,
    	'name'      => 'super_admin',
    	'display_name'  => 'Super Admin',
    	'type'      => User::ADMIN_USER_TYPE['id']
  	];

  	const ADMIN = [
    	'id'      => 2,
    	'name'      => 'admin',
    	'display_name'  => 'Admin',
    	'type'      => User::ADMIN_USER_TYPE['id']
  	];

  	const CLIENT = [
    	'id'      => 3,
    	'name'      => 'client',
    	'display_name'  => 'Client',
    	'type'      => User::CLIENT_USER_TYPE['id']
  	];

    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 
        'email',
        'name', 
        'password',
        'user_type',
        'activated_at',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
    
    //---------- helpers
    public static function byId($role)
    {
        return $role['id'];
    }

    //---------- scopes
    public function scopeName($query, $name)
    {
        if (!empty($name))
        {
            return $query->where('name', $name);
        }
    }

    public static function byName($role)
    {
          return $role['name']; // get the fields name
    }

}
