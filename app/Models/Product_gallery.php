<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_gallery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['product_id', 'photo', 'is_default'];
    protected $hidden = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getPhotoAttribute($value)
    {
        return url('storage/' . $value);
    }
}
