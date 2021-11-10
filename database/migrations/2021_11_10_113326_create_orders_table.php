<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->foreignId('user_id');
            $table->tinyInteger('status')->default(\App\Models\Order::STATUS_NEW);
            $table->tinyInteger('deliveryType')->default(\App\Models\Order::DELIVERY_PICKUP);

            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->unsignedInteger('totalSum');
            $table->unsignedInteger('deliverySum')->default(0);

            $table->text('description')->nullable();

            $table->timestamps();
        });

        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->foreignId('movie_id');

            $table->unsignedInteger('price')->default(0);
            $table->unsignedInteger('count')->default(1);

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
}
