<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
        $table->increments('EmployeeID');

		    $table->string('LastName', 20);
		    $table->string('FirstName', 10);
		    $table->string('Title', 30)->default(null);
        $table->string('TitleOfCourtesy', 25)->default(null);
		    $table->date('BirthDate')->default(null);
		    $table->date('HireDate')->default(null);
		    $table->string('Address', 60)->default(null);
		    $table->string('City', 15)->default(null);
		    $table->string('Region', 15)->default(null);
		    $table->string('PostalCode', 10)->default(null);
        $table->string('Country', 15)->default(null);
        $table->string('HomePhone', 24)->default(null);
        $table->float('Salary',8, 2)->default(null);

		  
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
        Schema::dropIfExists('employees');
    }
}
