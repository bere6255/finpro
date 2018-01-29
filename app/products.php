<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'pro_name', 'description','amount','image_url','user_id','cat','sub_cat'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
