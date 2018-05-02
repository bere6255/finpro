<?php

namespace DaraWorks;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'pro_name', 'description','amount','image_url','user_id','cat','sub_cat','add_on'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
