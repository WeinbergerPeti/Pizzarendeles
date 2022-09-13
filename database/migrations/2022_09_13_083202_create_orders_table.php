<?php

use App\Models\Order;
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
            $table->id("order_id");
            $table->foreignId("user_id")->references("id")->on("users");
            $table->foreignId("pizza_id")->references("pizza_id")->on("pizzas");
            $table->timestamps();
        });

        Order::create(["user_id"=>1, "pizza_id"=>1]);
        Order::create(["user_id"=>2, "pizza_id"=>2]);
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
