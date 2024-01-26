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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nisn');
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->text('address');
            $table->enum('gender', ['Laki-Laki', 'Perempuan']);
            $table->enum('religion', ['Islam', 'Katolik', 'kristen', 'Hindu', 'Buddha', 'Konghucu']);
            $table->text('photo');
            $table->foreignId('classroom_id')->constrained('classrooms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
