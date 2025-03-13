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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('type_membership')->nullable();
            $table->string('sname')->nullable();
            $table->string('name')->nullable();
            $table->string('mname')->nullable();
            $table->string('profile')->nullable();
            $table->string('password')->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('dob')->nullable();
            $table->string('admission_year')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('branch')->nullable();
            $table->string('other_isntitute')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('name_organization')->nullable();
            $table->string('year')->nullable();
            $table->string('job')->nullable();
            $table->text('other_achivements')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
