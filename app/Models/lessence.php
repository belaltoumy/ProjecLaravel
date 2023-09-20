<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessence extends Model
{
    use HasFactory;
    protected $fillabel =['name','location'];
    public function COURSES(){
    return $this->belongsTo(course::class);
    }
    public function USERREAD(){
        return $this->hasMany(readcourse::class);
        }
}
