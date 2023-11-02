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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('from_user_id')->nullable();
            $table->bigInteger('to_user_id');
            $table->text('content');
            $table->boolean('seen')->default(0);
            $table->boolean('from_site')->default(0);
            $table->boolean('to_all_users')->default(0);
            $table->bigInteger('post_id')->nullable();
            $table->smallInteger('type_id')->nullable();
            $table->bigInteger('comment_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
