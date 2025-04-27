<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('resumes', function (Blueprint $table) {
        $table->id();
        $table->string('session_id');
        $table->string('full_name');
        $table->string('email');
        $table->string('phone')->nullable();
        $table->string('address')->nullable();
        $table->string('website')->nullable();
        $table->string('linkedin')->nullable();
        $table->string('github')->nullable();
        $table->text('summary')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
