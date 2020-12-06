<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MattressTopper extends Model
{
    use HasFactory;

     public function category()
     {
          return $this->belongsTo('App\Models\Category');
     }
}