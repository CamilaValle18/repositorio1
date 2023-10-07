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
        Schema::create('fuelcost', function (Blueprint $table) {
            $table->id();
            $table->text("type");
            $table->decimal("kilometers traveled");
            $table->decimal("fuel consumet");
            $table->integer("trip_cost");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuelcost');
    }
};
