<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;
  protected $fillable = [
 
        'product_name',
        'slug',
        'description',
        'sku',
        'regular_price',
        'discounted_price',
        'tax_rate',
        'stock_quantity',
        'stock_status',
        'visibility',
        'meta_title',
        'meta_description',
        'status',
        'seller_id',
        'category_id',
        'subcategory_id',
        'store_id'
];
public function category() {
    return $this->belongsTo(Category::class);
}
public function subcategory() {
    return $this->belongsTo(subCategory::class);
}
public function store() {
    return $this->belongsTo(store::class);
}
public function seller() {
    return $this->belongsTo(User::class);
}
// after productimage
public function images() {
    return $this->hasMany(ProductImage::class);
}
}
