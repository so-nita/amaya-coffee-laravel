<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'description', 'image', 'createdAt', 'isDeleted'];
    public $timestamps = false;
    use HasFactory;
}
