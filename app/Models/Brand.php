<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
        public function categories(){
          return $this->belongsToMany(Categories::class,Product::class);
        }
}
