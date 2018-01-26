<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {

      $table->increments('SupplierID');


      $table->string('CompanyName', 40);
      $table->string('ContactName', 30)->default(null);
      $table->string('ContactTitle', 30)->default(null);
      $table->string('Address', 60)->default(null);
      $table->string('City', 15)->default(null);
      $table->string('Region', 15);
      $table->string('PostalCode', 10)->default(null);
      $table->string('Country', 15)->default(null);
      $table->string('Phone', 24)->default(null);
      $table->string('Fax', 24);
      $table->mediumText('HomePage');

      $table->index('companyname');
      $table->index('postalcode');

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
        Schema::dropIfExists('suppliers');
    }
}
