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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("firstName")->nullable();
            $table->string("lastName")->nullable();
            $table->string("email")->nullable();
            $table->string("subject")->nullable();
            $table->text("message")->nullable();
            $table->string("ip")->nullable();
            $table->enum("status",["0","1"])->default("0");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
