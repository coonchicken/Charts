<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerritoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('territories', function (Blueprint $table) {

            $table->string('TerritoryId');
            $table->primary('TerritoryId');
            $table->string('TerritoryDescription', 50);
            $table->integer('RegionId');

  /*          $table->foreign('RegionId')
            		        ->references('RegionId')->on('Region');
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
        Schema::dropIfExists('territories');
    }
}
