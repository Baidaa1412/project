<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ProductName',
        'Description',
        'Price',
        'DiscountPrice',
        'CategoryID',
        'ImageURL',
        'StockQuantity',
        'DateAdded',
        'style',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryID');
    }
    public function reviews()
{
    return $this->hasMany(Review::class);
}

}
