<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $guarded = [];

    //Relacion UNO A MUCHOS
    public function products(){
        return $this->belongsToMany(Product::class, 'product_sale')
                    ->withTimestamps()
                    ->withPivot('ammount', 'status' , 'product_id', 'user_id', 'created_at');

    }

    //A UNO INVERSA
    public function user(){
        return $this->belongsTo(User::class);
    }
}
