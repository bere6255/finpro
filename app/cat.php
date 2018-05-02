<?php

namespace DaraWorks;

use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'Cart', 'image_url'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
