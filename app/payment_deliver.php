<?php

namespace DaraWorks;

use Illuminate\Database\Eloquent\Model;

class payment_deliver extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'order_id', 'buyer_id','buyer_act','seller_id','seller_act','amount','deliver_date'
  ];
}
