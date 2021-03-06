<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class UserPrivileges extends Model implements AuthenticatableContract, AuthorizableContract
{
  use Authenticatable, Authorizable;

  protected $table = 'user_privileges';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
  	'username','name','userlevel','password','account_no'
  ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = ['password','api_key','created_at','updated_at'];
}
