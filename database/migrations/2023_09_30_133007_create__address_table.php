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
        Schema::create('_address', function (Blueprint $table) {
            $table->id();
            $table->text("Street");
            $table->integer("interior number");
            $table->integer("outdoor number");
            $table->integer("poustal code");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_address');
    }
};
