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
    
    //MUCHO A MUCHOS
    public function sales(){
        return $this->belongsToMany(Sale::class);
    }

    //Relacion UNO A MUCHOS
    public function users(){
        return $this->belongsToMany(User::class, 'product_sale')
                    ->withTimestamps()
                    ->withPivot('ammount', 'status' , 'product_id', 'user_id', 'created_at');

    }

}
