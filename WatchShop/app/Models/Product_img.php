<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_img extends Model
{
    use HasFactory;
    protected $table = 'product_imgs';
    protected $fillable =['id','id_product','image'];
    
}
