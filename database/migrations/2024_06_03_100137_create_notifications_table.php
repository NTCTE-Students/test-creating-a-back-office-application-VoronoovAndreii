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
        Schema::create('inotifications', function (Blueprint $table) {
            $table->id();
            $table->enum('category_incomes', ['add a product', 'something`s broken']);
            $table->foreignId('users_id')->constrained();
            $table->string('description_notifications');
            $table->boolean('read');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inotifications');
    }
};
