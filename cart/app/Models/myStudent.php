<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myStudent extends Model
{
    use HasFactory;
    protected $fillable=['name','studentID','age','department','gpa'];
    public function students(){
        return $this->belongsTo('App\Models\Category');
    }
}
