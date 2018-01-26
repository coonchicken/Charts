<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('regions')->delete();
       //insert some dummy records
       DB::table('regions')->insert(array(
  array('RegionID' => '1','RegionDescription' => 'Eastern                                           '),
  array('RegionID' => '2','RegionDescription' => 'Westerns                                          '),
  array('RegionID' => '3','RegionDescription' => 'Northern                                          '),
  array('RegionID' => '4','RegionDescription' => 'Southern                                          ')
)
);
    }
}
