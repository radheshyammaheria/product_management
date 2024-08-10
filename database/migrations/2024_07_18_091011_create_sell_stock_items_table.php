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
        Schema::create('sell_stock_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sell_stock_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->string('ordered_quantity')->nullable();
            $table->string('total_selling_price')->nullable();
            $table->bigInteger('discout_type')->nullable();
            $table->string('discount')->nullable();
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
        Schema::dropIfExists('sell_stock_items');
    }
};
