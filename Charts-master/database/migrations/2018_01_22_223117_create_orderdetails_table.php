<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {

            $table->integer('OrderId');
            $table->integer('ProductId');
            $table->decimal('UnitPrice',10, 4);
            $table->smallInteger('Quantity');
            $table->double('Discount',8, 0);


  /*          $table->foreign('OrderId')
            ->references('OrderId')->on('orders');

            $table->foreign('ProductId')
            ->references('ProductId')->on('Products');
*/
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
        Schema::dropIfExists('orderdetails');
    }
}
