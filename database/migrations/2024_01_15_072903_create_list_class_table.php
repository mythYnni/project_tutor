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
        Schema::create('list_class', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('register_tutor_id');
            $table->foreign('register_tutor_id')->references('id')->on('register_tutor')->onDelete('cascade');
            $table->unsignedBigInteger('use_id');
            $table->foreign('use_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_class');
    }
};
