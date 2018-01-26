<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->delete();
       //insert some dummy records
       DB::table('categories')->insert(array(
  array('CategoryID' => '1','CategoryName' => 'Beverages'),
  array('CategoryID' => '2','CategoryName' => 'Condiments'),
  array('CategoryID' => '3','CategoryName' => 'Confections'),
  array('CategoryID' => '4','CategoryName' => 'Dairy Products'),
  array('CategoryID' => '5','CategoryName' => 'Grains/Cereals'),
  array('CategoryID' => '6','CategoryName' => 'Meat/Poultry'),
  array('CategoryID' => '7','CategoryName' => 'Produce'),
  array('CategoryID' => '8','CategoryName' => 'Seafood')
)
);
    }
}
