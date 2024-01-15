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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slugUser')->nullable(false)->unique(); // mã tài khoản
            $table->string('fullName')->nullable(false);
            $table->string('phone')->nullable(false)->unique();
            $table->string('address')->nullable();
            $table->string('class')->nullable();
            $table->string('classify ')->nullable(false);
            $table->string('school')->nullable();
            $table->string('schoolTutor')->nullable();
            $table->string('facebook')->nullable();
            $table->string('sex')->nullable(false);
            $table->string('password')->nullable(false); // mật khẩu
            $table->string('fileCV')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
