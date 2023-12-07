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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id')->nullable();
            $table->string('sub_amount')->nullable();
            $table->string('vat')->nullable();
            $table->string('discount_type')->nullable();
            $table->date('order_date')->format('d.m.Y');
            $table->boolean('order_status')->nullable();
            $table->string('payment')->nullable();
            $table->string('item_quentity')->nullable();
            $table->string('total_amount')->nullable();
            $table->integer('waiter_id')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
