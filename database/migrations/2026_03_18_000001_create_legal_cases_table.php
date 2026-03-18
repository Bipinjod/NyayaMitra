<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('legal_cases', function (Blueprint $table) {
            $table->id();
            $table->string('case_number')->unique();
            $table->string('title');
            $table->string('plaintiff');
            $table->string('defendant');
            $table->string('court');
            $table->string('judge');
            $table->enum('case_type', ['Civil', 'Criminal', 'Family', 'Commercial', 'Constitutional']);
            $table->enum('status', ['Pending', 'In Progress', 'Adjourned', 'Disposed', 'Appealed']);
            $table->date('filed_date');
            $table->datetime('next_hearing')->nullable();
            $table->text('verdict')->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('legal_cases');
    }
};
