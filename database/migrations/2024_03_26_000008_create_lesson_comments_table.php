<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lesson_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('content');
            $table->integer('timestamp')->nullable(); // Tempo em segundos do vídeo onde o comentário foi feito
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lesson_comments');
    }
}; 