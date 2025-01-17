<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';  
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'description', 'image', 'category_id', 'cost', 'qty', 'createdAt', 'isDeleted'];

    public $timestamps = false;
}

