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
        Schema::create('test_file', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable(false)->unique();
            $table->string('fullName')->nullable(false);
            $table->longText('details')->default();
            $table->string('class')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_file');
    }
};
