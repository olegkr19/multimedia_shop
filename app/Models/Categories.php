<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
  public function brands(){
      return $this->belongsToMany(Brand::class,Product::class);
  }
}
