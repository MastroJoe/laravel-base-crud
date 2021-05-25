<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
  protected $fillable = array('title', 'description', 'thumb',
  'price', 'series', 'sale_date', 'type');
}
