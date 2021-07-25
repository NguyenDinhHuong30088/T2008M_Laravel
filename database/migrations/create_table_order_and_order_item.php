<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateTableOrderAndOrderItem extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("customer_name");
            $table->string("customer_tel");
            $table->string("customer_address");
            $table->decimal("grand_total",14,2)->default(0);
            $table->tinyInteger("status")->default(0);
            $table->timestamps();
        });
        Schema::create('orders_items', function (Blueprint $table) {
            $table->unsignedBigInteger("order_id");
            $table->unsignedBigInteger("product_id");
            $table->unsignedInteger("qty")->default(1);
            $table->decimal("price",14,2)->default(0);
            $table->foreign("order_id")->references("id")->on("orders");
            $table->foreign("product_id")->references("id")->on("products");
        });
    }
    public function down()
    {
        Schema::dropIfExists('orders_items');
        Schema::dropIfExists('orders');
    }
}
