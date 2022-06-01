<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'price',
        'image'
    ];

    protected $casts = [
        'category_id' => 'integer',
        'price'       => 'float'
    ];

    // public function getImageAttribute($value)
    // {
    //     return ($value) ? '/storage/' . $this->image : '/images/dummy.png';
    // }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
