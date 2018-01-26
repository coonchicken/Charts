<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeterritoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeeterritories', function (Blueprint $table) {


        $table->string('TerritoryID');
        $table->primary('TerritoryID');
 		    $table->string('TerritoryDescription', 5)->default(null);
 		    $table->integer('RegionID')->default(null);


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
        Schema::dropIfExists('employeeterritories');
    }
}
