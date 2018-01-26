<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {


		    $table->string('CustomerID', 5);
		    $table->string('CompanyName', 40);
		    $table->string('ContactName', 30)->default(null);
		    $table->string('ContactTitle', 30)->default(null);
		    $table->string('Address', 60);
		    $table->string('City', 15);
		    $table->string('Region', 15);
		    $table->string('PostalCode', 10);
		    $table->string('Country', 15);
		    $table->string('Phone', 24);
		    $table->string('Fax', 24);

		    $table->primary('CustomerID');

		    $table->index('city');
		    $table->index('companyname');
		    $table->index('postalcode');
		    $table->index('region');
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
        Schema::dropIfExists('customers');
    }
}
