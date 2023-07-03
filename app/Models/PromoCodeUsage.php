<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCodeUsage extends Model
{
    use HasFactory;

    protected $table = 'promo_code_usage';
    protected $fillable = ['user_id', 'promotion_id'];
}
