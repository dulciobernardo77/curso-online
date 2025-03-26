<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->string('category');
            $table->text('objectives');
            $table->text('requirements');
            $table->integer('duration_hours');
            $table->integer('level'); // 1: Iniciante, 2: Intermediário, 3: Avançado
            $table->boolean('featured')->default(false);
            $table->boolean('published')->default(false);
            $table->foreignId('instructor_id')->constrained('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
