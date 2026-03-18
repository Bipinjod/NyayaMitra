<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('court_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('legal_case_id')->constrained('legal_cases')->cascadeOnDelete();
            $table->string('court_room');
            $table->date('hearing_date');
            $table->time('hearing_time');
            $table->string('judge');
            $table->enum('status', ['Scheduled', 'Completed', 'Postponed', 'Cancelled']);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('court_schedules');
    }
};
