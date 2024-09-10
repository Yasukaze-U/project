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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("ingredient");
            $table->string("body");
            $table->double("protein");
            $table->double("fat");
            $table->double("carbonhydrate");
            $table->double("calorie");
            $table->string("image_url")->nullable(true)->default(NULL);
            $table->timestamps();
            $table->timestamp("deleted_at")->nullable(true)->default(NULL);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('type_category_id')->constrained()->onDelete('cascade');
            $table->foreignId('calorie_category_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
