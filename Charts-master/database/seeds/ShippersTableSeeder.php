<?php

use Illuminate\Database\Seeder;

class ShippersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('shippers')->delete();
       //insert some dummy records
       DB::table('shippers')->insert( array(
  array('ShipperID' => '1','CompanyName' => 'Speedy Express','Phone' => '(503) 555-9831'),
  array('ShipperID' => '2','CompanyName' => 'United Package','Phone' => '(503) 555-3199'),
  array('ShipperID' => '3','CompanyName' => 'Federal Shipping','Phone' => '(503) 555-9931')
)
);
    }
}
