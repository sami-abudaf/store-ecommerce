<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_verification extends Model
{

    public $table='users_verificationCodes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'code','created_at','updated_at'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */




    public function attribute(){
        return $this -> belongsTo(Attribute::class,'attribute_id');
    }
}
