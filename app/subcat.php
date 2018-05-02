<?php

namespace DaraWorks;

use Illuminate\Database\Eloquent\Model;

class subcat extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'cat', 'sub_cat','image_url'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
