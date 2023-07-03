<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $table = 'promotions';
    protected $fillable = ['name', 'code', 'discount_amount', 'uses', 'max_uses', 'max_uses_user', 'starts_at', 'expires_at'];
}
