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
        Schema::create('timetable_entries', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('day'); // 曜日（1＝月 〜 5＝金）
            $table->unsignedTinyInteger('period'); // 時限（1〜6）
            $table->string('title'); // 授業名
            $table->string('room')->nullable(); // 教室名
            $table->timestamps();

            $table->unique(['day', 'period']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetable_entries');
    }
};
