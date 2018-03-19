<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'users_id', 'balance','last_tran','for_tran'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
