<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'price',
        'description',
        'serial_number',
        'category_id'
    ] ;

    public function product(){
        return $this->belongsTo(categorie::class,'category_id');
    }
}
