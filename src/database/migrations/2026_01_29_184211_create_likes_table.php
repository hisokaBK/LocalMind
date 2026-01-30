<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // user li dar like
            $table->foreignId('question_id')->constrained()->onDelete('cascade'); // question li like
            $table->timestamps();

            $table->unique(['user_id','question_id']); // bach ma ydblakshi like nafs question
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};

