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
        Schema::create('student_admissions', function (Blueprint $table) {
            $table->id();

            $table->string('full_name', 50);
            $table->string('email')->nullable();
            $table->string('parent_name', 50);
            $table->string('phone_number', 20)->nullable();
            $table->string('payment_method');
            $table->string('transaction_id', 100);
            $table->string('amount')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_admissions');
    }
};
