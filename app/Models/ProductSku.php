<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductSku extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    
    public function size()
    {
        return $this->belongsTo(Size::class);
    }
    
    public function product_image()
    {
        return $this->belongsTo(ProductImage::class);
    }
}
