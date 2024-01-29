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
       Schema::create('properties', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->text('description');
    // For storing photos, consider using a string to store file paths
    // or implement a more complex file storage solution
    $table->string('photos')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
