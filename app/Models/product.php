<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function coverImage()
    {
        return $this->belongsTo(ProductImage::class, 'id', 'product_id')->where('is_cover', '=', true);
    }

    public function seo()
    {
        return $this->belongsTo(SeoItems::class, 'id', 'ref_id')->where('type', '=', 'product');
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

}


