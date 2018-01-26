<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

        $table->increments('OrderID');
        $table->string('CustomerID', 5)->default(null);
		    $table->integer('EmployeeID')->default(null);
		    $table->date('OrderDate')->default(null);
		    $table->date('RequiredDate')->default(null);
		    $table->date('ShippedDate');
		    $table->integer('ShipVia')->default(null);
		    $table->decimal('Freight', 10, 4)->default('0.0000');
		    $table->string('ShipName', 40)->default(null);
		    $table->string('ShipAddress', 60)->default(null);
		    $table->string('ShipCity', 15)->default(null);
		    $table->string('ShipRegion', 15);
		    $table->string('ShipPostalCode', 10);
		    $table->string('ShipCountry', 15)->default(null);

		/*    $table->index('CustomerID');
		    $table->index('EmployeeID');

        $table->foreign('CustomerID')
        ->references('CustomerID')->on('Customers');

        $table->foreign('EmployeeID')
        ->references('EmployeeID')->on('Employees');
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
        Schema::dropIfExists('orders');
    }
}
