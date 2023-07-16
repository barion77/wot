<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scammer extends Model
{
    use HasFactory;

    protected $table = 'scammers';
    protected $fillable = ['name', 'description'];
}
