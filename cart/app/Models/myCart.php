<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myCart extends Model
{
    protected $fillable=['oderID','userID','quantity','productID'];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function product(){
        return $this->hasMany('App\Models\Product');
    }
    public function user(){
        return $this->belongsTo('App\Models\user');
    }
}
