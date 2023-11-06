<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserID')->nullable();
            $table->datetime('OrderDate')->nullable();
            $table->decimal('TotalAmount', 10, 2);
            $table->string('City', 255);
            $table->string('ShippingAddress', 255);
            $table->string('PaymentMethod', 50);
            $table->string('OrderStatus', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
