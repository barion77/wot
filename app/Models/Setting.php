<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';
    protected $fillable = ['lava_secret_key', 'shop_id', 'telegram_bot_token', 'chat_id', 'send_logs', 'telegram_support_link', 'telegram_channel_link', 'zelenka_token'];
}
