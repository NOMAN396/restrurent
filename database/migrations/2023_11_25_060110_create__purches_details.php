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
        Schema::create('purches_details', function (Blueprint $table) {
            $table->id();
            $table->integer('purches_id')->nullable();
            $table->integer('row_item_id')->nullable();
            $table->integer('unit_id')->nullable();
            $table->string('quentity')->nullable();
            $table->string('price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purches_details');
    }
};
