<?php

namespace DaraWorks;

use Illuminate\Database\Eloquent\Model;

class account_hystory extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'users_id', 'name','status','amount'
  ];
}
