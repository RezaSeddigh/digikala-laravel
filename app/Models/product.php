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

}


