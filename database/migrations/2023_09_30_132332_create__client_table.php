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
        Schema::create('_client', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("last name");
            $table->string("mother last name");
            $table->string("sex");php artisan make:migration create_Address_table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_client');
    }
};
