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
        if (!Schema::hasTable('lecturers')) {
            Schema::create('lecturers', function (Blueprint $table) {
                $table->id();
                $table->string('lecturer_name');
                $table->string('course_taught');
                $table->unsignedTinyInteger('year')->nullable();
                $table->string('course_images')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('lecturers')) {
            Schema::dropIfExists('lecturers');
    }
}
};
