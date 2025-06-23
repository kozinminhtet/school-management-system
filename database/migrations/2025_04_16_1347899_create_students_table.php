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
            $table->string("register_no");
            $table->string("student_name", 255);
            $table->foreignId("grade_id")->constrained()->onDelete('cascade');
            $table->string("father_name");
            $table->string("mother_name");
            $table->string("address", 255);
            $table->string("phone", 20); // Phone column added
            $table->enum("gender", ['male', 'female', 'other']);
            $table->string("image")->nullable();
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
