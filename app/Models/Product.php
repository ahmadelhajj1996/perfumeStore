<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'image',
        'category_id',
        'slug',
        'price',
        'quantity',
        'status',
    ];



    protected $casts = [
        'title' => 'array' ,
        'description' => 'array'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
