<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['title', 'description', 'system_requirements', 'main_image', 'images', 'price', 'category_id', 'slug'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function resolveRouteBinding($value, $field = null)
    {
        if (!is_numeric($value)) {
            return $this->where('slug', $value)->first();
        }

        return $this->where('id', $value)->first();
    }

    public function getImages()
    {
        $images = json_decode($this->images, true);

        return $images;
    }

    public function getFirstImage()
    {
        $images = $this->getImages();

        return $images[0];
    }
}
