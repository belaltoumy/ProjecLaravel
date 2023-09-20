<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $fillabel =['name_course','discreption'];
    public function LESSENCES(){
        return $this->hasMany(lessences::class);
    }
    public function usercourse()
    {
        return $this->hasMany(usercourse::class);
    }
}
