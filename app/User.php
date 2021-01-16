<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    const ADMIN_USER_TYPE = [
        'id' => self::ADMIN_TYPE, 
        'name' => "Admin"
    ];

    const CLIENT_USER_TYPE = [
        'id' => self::CLIENT_TYPE,
        'name' => "Client"
    ];

    const ADMIN_TYPE = 1;
    const CLIENT_TYPE = 2;

    const ROLE_SUPER_ADMIN = 'super_admin';
    const ROLE_ADMIN       = 'admin';
    const ROLE_CLIENT      = 'client';

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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /** Relationship Table **/

    /**
     * The client that belong to the user.
     * return $this->hasOne('App\Phone', 'foreign_key_of_the_client', 'local_key_of_the_user') // sakto nani
    */
    public function client()
    {
        return $this->hasOne('App\Client', 'user_id', 'id');
    }

    /**
     * The roles that belong to the user.
     * return $this->hasOne('App\Phone', 'foreign_key', 'local_key') // sakto nani
    */
    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id');
    }

    /** Access Scopes **/
     public function scopeUsernameOrEmail($query, $login)
    {
        if (!empty($login))
        {
            return $query->where(function($query) use ($login)
            {
                return $query->where('username', $login)
                             ->orWhere('email', $login);
            });
        }
    }
    

    //---------- helpers
   
    /**
     * Checking is Client Role.
     * to do
     */
    public function isClient($role = null)
    {

        if($this->user_type == self::CLIENT_TYPE)   // checking if admin type siya
        {
            return  !empty($role) ? $this->hasRole($role) : true;
        }

        return false;
    }

    /**
     * Checks if the user has a role by its ID.
     *
     * @param int|array $id             Role id or array of role ids.
     * @param bool      $requireAll     All roles in the array are required.
     * @return bool
     */
    public function hasRoleById($id, $requireAll = false)
    {
       if (is_array($id))
        {
            foreach ($id as $roleID)
            {
                $hasRole = $this->hasRoleById($roleID);

                if ($hasRole && !$requireAll)
                {
                    return true;
                }
                elseif (!$hasRole && $requireAll)
                {
                    return false;
                }
            }

            // If we've made it this far and $requireAll is FALSE, then NONE of the roles were found
            // If we've made it this far and $requireAll is TRUE, then ALL of the roles were found.
            // Return the value of $requireAll;
            return $requireAll;
        }
        else
        {
            foreach ($this->roles as $role)
            {
                if ($role->id == $id)
                {
                    return true;
                }
            }
        }

        return false;
    }

    public function hasRole($name, $requireAll = false)
    {

        if (is_array($name))
        {
            foreach ($name as $roleName)
            {
                $hasRole = $this->hasRole($roleName);

                if ($hasRole && !$requireAll)
                {
                    return true;
                }
                elseif (!$hasRole && $requireAll)
                {
                    return false;
                }
            }

            return $requireAll;
        }
        else
        {
            foreach ($this->roles as $role)
            {
                if ($role->name == $name)
                {
                    return true;
                }
            }
        }

        return false;
    }  
}
