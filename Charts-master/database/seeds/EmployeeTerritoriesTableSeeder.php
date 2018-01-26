<?php

use Illuminate\Database\Seeder;

class EmployeeTerritoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('employeeterritories')->delete();
       //insert some dummy records
       DB::table('employeeterritories')->insert(array(
  array('EmployeeID' => '1','TerritoryID' => '06897'),
  array('EmployeeID' => '1','TerritoryID' => '19713'),
  array('EmployeeID' => '2','TerritoryID' => '01581'),
  array('EmployeeID' => '2','TerritoryID' => '01730'),
  array('EmployeeID' => '2','TerritoryID' => '01833'),
  array('EmployeeID' => '2','TerritoryID' => '02116'),
  array('EmployeeID' => '2','TerritoryID' => '02139'),
  array('EmployeeID' => '2','TerritoryID' => '02184'),
  array('EmployeeID' => '2','TerritoryID' => '40222'),
  array('EmployeeID' => '3','TerritoryID' => '30346'),
  array('EmployeeID' => '3','TerritoryID' => '31406'),
  array('EmployeeID' => '3','TerritoryID' => '32859'),
  array('EmployeeID' => '3','TerritoryID' => '33607'),
  array('EmployeeID' => '4','TerritoryID' => '20852'),
  array('EmployeeID' => '4','TerritoryID' => '27403'),
  array('EmployeeID' => '4','TerritoryID' => '27511'),
  array('EmployeeID' => '5','TerritoryID' => '02903'),
  array('EmployeeID' => '5','TerritoryID' => '07960'),
  array('EmployeeID' => '5','TerritoryID' => '08837'),
  array('EmployeeID' => '5','TerritoryID' => '10019'),
  array('EmployeeID' => '5','TerritoryID' => '10038'),
  array('EmployeeID' => '5','TerritoryID' => '11747'),
  array('EmployeeID' => '5','TerritoryID' => '14450'),
  array('EmployeeID' => '6','TerritoryID' => '85014'),
  array('EmployeeID' => '6','TerritoryID' => '85251'),
  array('EmployeeID' => '6','TerritoryID' => '98004'),
  array('EmployeeID' => '6','TerritoryID' => '98052'),
  array('EmployeeID' => '6','TerritoryID' => '98104'),
  array('EmployeeID' => '7','TerritoryID' => '60179'),
  array('EmployeeID' => '7','TerritoryID' => '60601'),
  array('EmployeeID' => '7','TerritoryID' => '80202'),
  array('EmployeeID' => '7','TerritoryID' => '80909'),
  array('EmployeeID' => '7','TerritoryID' => '90405'),
  array('EmployeeID' => '7','TerritoryID' => '94025'),
  array('EmployeeID' => '7','TerritoryID' => '94105'),
  array('EmployeeID' => '7','TerritoryID' => '95008'),
  array('EmployeeID' => '7','TerritoryID' => '95054'),
  array('EmployeeID' => '7','TerritoryID' => '95060'),
  array('EmployeeID' => '8','TerritoryID' => '19428'),
  array('EmployeeID' => '8','TerritoryID' => '44122'),
  array('EmployeeID' => '8','TerritoryID' => '45839'),
  array('EmployeeID' => '8','TerritoryID' => '53404'),
  array('EmployeeID' => '9','TerritoryID' => '03049'),
  array('EmployeeID' => '9','TerritoryID' => '03801'),
  array('EmployeeID' => '9','TerritoryID' => '48075'),
  array('EmployeeID' => '9','TerritoryID' => '48084'),
  array('EmployeeID' => '9','TerritoryID' => '48304'),
  array('EmployeeID' => '9','TerritoryID' => '55113'),
  array('EmployeeID' => '9','TerritoryID' => '55439')
)
);
    }
}
