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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->constrained()->onDelete('cascade');
            $table->string('invoiceType')->nullable();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('carNo')->nullable();
            $table->string('carType')->nullable();
            $table->string('carService')->nullable();
            $table->string('price')->nullable();
            $table->longText('description')->nullable();
            $table->longText('note')->nullable();
            $table->longText('percent')->nullable();
            $table->longText('Ddate')->nullable();
            $table->longText('Rdate')->nullable();
            $table->string('paidMethod')->nullable();
            $table->string('carStatus')->default('fixing');
            $table->json('carInfo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
