<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clearance extends Model
{
  const CLEARANCE_STATUS = [
    self::APPROVED,
    self::DECLINED,
    self::PENDING
  ];

  const APPROVED = [
   	'id' => 1,
   	'name' => 'approved',
   	'display_name' => 'Approved'
  ];

  const DECLINED = [
   	'id' => 2,
   	'name' => 'declined',
   	'display_name' => 'Declined'
  ];

  const PENDING = [
   	'id' => 3,
   	'name' => 'pending',
   	'display_name' => 'Pending'
  ];

  const NOT_AVAILABLE = [
   	'id' => 4,
   	'name' => 'not_available',
   	'display_name' => 'Not Available'
  ];

  /**
     * The table associated with the model.
     *
     * @var string
  */
  protected $table = 'clients_clearance';

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
    'client_id',
    'project_owner', 
    'project_title',
    'project_location',
    'owner_address',
    'contractor',
    'auth_representative',
    'contact_number',
    'email',
    'total_floor_area',
    'no_of_storey',
    'fsec',
    'fsic',
    'amount',
    'province',
    'type_of_occupancy',
    'region',
    'created_by',
    'updated_by',
    'created_at',
    'updated_at',
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

    public function fSec($data)
    {
      if(!empty( $data )){
        foreach( self::CLEARANCE_STATUS as $status ){
          if($status['id']==$data){
            return $status['display_name'];
          }
        }
      }
    }

    public function fSic($data)
    {
      if(!empty( $data )){
        foreach( self::CLEARANCE_STATUS as $status ){
          if($status['id']==$data){
            return $status['display_name'];
          }
        }
      }
    }

    /**
    * Inverse
    */
    public function client()
    {
        /* return $this->hasOne('App\Phone', 'foreign_key_of_the_clearance', 'local_key_of_the_client') // sakto nani */
        return $this->belongsTo( Client::class , 'client_id', 'id' );
    }

}
