<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    //A UNO INVERSA
    public function category(){
        return $this->belongsTo(Category::class);
    }
    //A MUCHOS
    public function sales(){
        return $this->belongsToMany(Sale::class);
    }

}
