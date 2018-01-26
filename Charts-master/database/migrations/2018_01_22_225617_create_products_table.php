<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

        $table->increments('ProductID');
    
		    $table->string('ProductName', 40);
		    $table->integer('SupplierID')->default(null);
		    $table->integer('CategoryID')->default(null);
		    $table->string('QuantityPerUnit', 20)->default(null);
		    $table->decimal('UnitPrice', 10, 4)->default('0.0000');
		    $table->smallInteger('UnitsInStock')->default('0');
		    $table->smallInteger('UnitsOnOrder')->default('0');
		    $table->smallInteger('ReorderLevel')->default('0');
        $table->smallInteger('Discontinued')->default('0');

	/*	    $table->index('SupplierID');
		    $table->index('CategoryID');

		    $table->foreign('SupplierID')
		        ->references('SupplierID')->on('Suppliers');
        $table->foreign('CategoryID')
    		        ->references('CategoryID')->on('Categories');
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
        Schema::dropIfExists('products');
    }
}
