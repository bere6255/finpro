<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'commenter_id', 'product_id','comment', 'commenters_name','commenters_img_url'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
