<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->text('lava_secret_key');
            $table->integer('shop_id');

            $table->string('telegram_support_link');
            $table->string('telegram_channel_link');

            $table->text('telegram_bot_token')->nullable();
            $table->integer('chat_id')->nullable();
            $table->boolean('send_logs')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
