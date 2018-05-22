<?php

namespace DaraWorks;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'bayers_id', 'seller_id','product_id','amount','status','order_id','add_1','add_2','add_3','add_4','add_5'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [

  ];
}
