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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_workers_id')->constrained()->onDelete('cascade');
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('carNo')->nullable();
            $table->string('carType')->nullable();
            $table->string('carColor')->nullable();
            $table->string('status')->nullable();
            $table->longText('notes')->nullable();
            $table->longText('image')->nullable();
            $table->longText('start')->nullable();
            $table->longText('end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
