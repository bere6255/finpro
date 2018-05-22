<?php

namespace DaraWorks;

use Illuminate\Database\Eloquent\Model;

class sells extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'users_id', 'bayers_id','amount','status','order_id'
  ];
}
