<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';
    protected $fillable = ['title', 'content', 'slug'];

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
}
