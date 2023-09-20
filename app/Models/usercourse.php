<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usercourse extends Model
{
    use HasFactory;
    protected $fillabel =['add_user','delet_user','add_lesseence','delete_lesseence'];
   public function user(){
    return $this->belongsTo(User::class);
   }
   public function course(){
    return $this->belongsTo(course::class);
   }
}
