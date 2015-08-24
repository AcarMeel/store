<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
  public $timestamps = false;
  protected $table = 'order_items';
  protected $fillable = ['price','quantity','product_id','order_id'];
}
