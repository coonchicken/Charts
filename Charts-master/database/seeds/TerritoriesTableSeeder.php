<?php

use Illuminate\Database\Seeder;

class TerritoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('territories')->delete();
       //insert some dummy records
       DB::table('territories')->insert(array(
  array('TerritoryID' => '01581','TerritoryDescription' => 'Westboro                                          ','RegionID' => '1'),
  array('TerritoryID' => '01730','TerritoryDescription' => 'Bedford                                           ','RegionID' => '1'),
  array('TerritoryID' => '01833','TerritoryDescription' => 'Georgetow                                         ','RegionID' => '1'),
  array('TerritoryID' => '02116','TerritoryDescription' => 'Boston                                            ','RegionID' => '1'),
  array('TerritoryID' => '02139','TerritoryDescription' => 'Cambridge                                         ','RegionID' => '1'),
  array('TerritoryID' => '02184','TerritoryDescription' => 'Braintree                                         ','RegionID' => '1'),
  array('TerritoryID' => '02903','TerritoryDescription' => 'Providence                                        ','RegionID' => '1'),
  array('TerritoryID' => '03049','TerritoryDescription' => 'Hollis                                            ','RegionID' => '3'),
  array('TerritoryID' => '03801','TerritoryDescription' => 'Portsmouth                                        ','RegionID' => '3'),
  array('TerritoryID' => '06897','TerritoryDescription' => 'Wilton                                            ','RegionID' => '1'),
  array('TerritoryID' => '07960','TerritoryDescription' => 'Morristown                                        ','RegionID' => '1'),
  array('TerritoryID' => '08837','TerritoryDescription' => 'Edison                                            ','RegionID' => '1'),
  array('TerritoryID' => '10019','TerritoryDescription' => 'New York                                          ','RegionID' => '1'),
  array('TerritoryID' => '10038','TerritoryDescription' => 'New York                                          ','RegionID' => '1'),
  array('TerritoryID' => '11747','TerritoryDescription' => 'Mellvile                                          ','RegionID' => '1'),
  array('TerritoryID' => '14450','TerritoryDescription' => 'Fairport                                          ','RegionID' => '1'),
  array('TerritoryID' => '19428','TerritoryDescription' => 'Philadelphia                                      ','RegionID' => '3'),
  array('TerritoryID' => '19713','TerritoryDescription' => 'Neward                                            ','RegionID' => '1'),
  array('TerritoryID' => '20852','TerritoryDescription' => 'Rockville                                         ','RegionID' => '1'),
  array('TerritoryID' => '27403','TerritoryDescription' => 'Greensboro                                        ','RegionID' => '1'),
  array('TerritoryID' => '27511','TerritoryDescription' => 'Cary                                              ','RegionID' => '1'),
  array('TerritoryID' => '29202','TerritoryDescription' => 'Columbia                                          ','RegionID' => '4'),
  array('TerritoryID' => '30346','TerritoryDescription' => 'Atlanta                                           ','RegionID' => '4'),
  array('TerritoryID' => '31406','TerritoryDescription' => 'Savannah                                          ','RegionID' => '4'),
  array('TerritoryID' => '32859','TerritoryDescription' => 'Orlando                                           ','RegionID' => '4'),
  array('TerritoryID' => '33607','TerritoryDescription' => 'Tampa                                             ','RegionID' => '4'),
  array('TerritoryID' => '40222','TerritoryDescription' => 'Louisville                                        ','RegionID' => '1'),
  array('TerritoryID' => '44122','TerritoryDescription' => 'Beachwood                                         ','RegionID' => '3'),
  array('TerritoryID' => '45839','TerritoryDescription' => 'Findlay                                           ','RegionID' => '3'),
  array('TerritoryID' => '48075','TerritoryDescription' => 'Southfield                                        ','RegionID' => '3'),
  array('TerritoryID' => '48084','TerritoryDescription' => 'Troy                                              ','RegionID' => '3'),
  array('TerritoryID' => '48304','TerritoryDescription' => 'Bloomfield Hills                                  ','RegionID' => '3'),
  array('TerritoryID' => '53404','TerritoryDescription' => 'Racine                                            ','RegionID' => '3'),
  array('TerritoryID' => '55113','TerritoryDescription' => 'Roseville                                         ','RegionID' => '3'),
  array('TerritoryID' => '55439','TerritoryDescription' => 'Minneapolis                                       ','RegionID' => '3'),
  array('TerritoryID' => '60179','TerritoryDescription' => 'Hoffman Estates                                   ','RegionID' => '2'),
  array('TerritoryID' => '60601','TerritoryDescription' => 'Chicago                                           ','RegionID' => '2'),
  array('TerritoryID' => '72716','TerritoryDescription' => 'Bentonville                                       ','RegionID' => '4'),
  array('TerritoryID' => '75234','TerritoryDescription' => 'Dallas                                            ','RegionID' => '4'),
  array('TerritoryID' => '78759','TerritoryDescription' => 'Austin                                            ','RegionID' => '4'),
  array('TerritoryID' => '80202','TerritoryDescription' => 'Denver                                            ','RegionID' => '2'),
  array('TerritoryID' => '80909','TerritoryDescription' => 'Colorado Springs                                  ','RegionID' => '2'),
  array('TerritoryID' => '85014','TerritoryDescription' => 'Phoenix                                           ','RegionID' => '2'),
  array('TerritoryID' => '85251','TerritoryDescription' => 'Scottsdale                                        ','RegionID' => '2'),
  array('TerritoryID' => '90405','TerritoryDescription' => 'Santa Monica                                      ','RegionID' => '2'),
  array('TerritoryID' => '94025','TerritoryDescription' => 'Menlo Park                                        ','RegionID' => '2'),
  array('TerritoryID' => '94105','TerritoryDescription' => 'San Francisco                                     ','RegionID' => '2'),
  array('TerritoryID' => '95008','TerritoryDescription' => 'Campbell                                          ','RegionID' => '2'),
  array('TerritoryID' => '95054','TerritoryDescription' => 'Santa Clara                                       ','RegionID' => '2'),
  array('TerritoryID' => '95060','TerritoryDescription' => 'Santa Cruz                                        ','RegionID' => '2'),
  array('TerritoryID' => '98004','TerritoryDescription' => 'Bellevue                                          ','RegionID' => '2'),
  array('TerritoryID' => '98052','TerritoryDescription' => 'Redmond                                           ','RegionID' => '2'),
  array('TerritoryID' => '98104','TerritoryDescription' => 'Seattle                                           ','RegionID' => '2')
)
);

    }
}
