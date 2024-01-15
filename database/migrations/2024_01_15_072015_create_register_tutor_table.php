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
        Schema::create('register_tutor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable(false)->unique();
            $table->string('fullName')->nullable(false);
            $table->string('class')->nullable(false);
            $table->longText('schedule')->default(0);
            $table->longText('request')->default(0);
            $table->json('schedule ')->default();
            $table->double('price')->default(0)->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_tutor');
    }
};
