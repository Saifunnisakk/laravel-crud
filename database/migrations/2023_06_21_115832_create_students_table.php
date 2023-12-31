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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile', 20);
            $table->string('email')->default('');
            $table->enum('branch', ['Computer science', 'Civil', 'Mechanical', 'Electrical', 'Information Technology', 'Electronics'])->default('Computer Science');
            $table->text('address')->default('');
            $table->json('additional_subjects')->nullable();
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
