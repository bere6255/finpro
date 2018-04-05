<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add_On extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'product_key', 'name_1','Amount','discribtion', 'name_2','Amount','discribtion', 'name_3','Amount','discribtion', 'name_4','Amount','discribtion', 'name_5','Amount','discribtion'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
