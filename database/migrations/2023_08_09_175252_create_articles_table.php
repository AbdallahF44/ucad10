<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); 
            $table->json('title');
            $table->json('content');
            $table->tinyInteger('status')->default(\App\Models\Article::STATUS_ACTIVE);
            $table->tinyInteger('type');
            $table->softDeletes();
            $table->timestamps();
        });
        // for ($i = 0; $i < 100; $i++) {
        //     \App\Models\Article::create([
        //         'title' => fake()->text(30),
        //         'content' => fake()->text(1000),
        //         'status' => rand(0, 1),
        //         'type' => rand(1, 3),
        //     ]);
        // }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
