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
      'product_key', 'name','Amount','discribtion', 'number','created_at','updated_at'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
