<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction_detail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['product_id', 'transaction_id'];
    protected $hidden = [];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
