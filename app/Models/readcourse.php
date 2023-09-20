<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class readcourse extends Model
{
    use HasFactory;
   public function USER(){
    return $this->belongsTo(user::class);
   }
   public function LESSENCE(){
    return $this->belongsTo(lessence::class);
   }
}
