<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('employees')->delete();
         //insert some dummy records
         DB::table('employees')->insert(array(
  array('EmployeeID' => '1','LastName' => 'Davolio','FirstName' => 'Nancy','Title' => 'Sales Representative','TitleOfCourtesy' => 'Ms.','BirthDate' => '1948-12-08','HireDate' => '1992-05-01','Address' => '507 - 20th Ave. E.Apt. 2A','City' => 'Seattle','Region' => 'WA','PostalCode' => '98122','Country' => 'USA','HomePhone' => '(206) 555-9857','Salary' => '2954.55'),
  array('EmployeeID' => '2','LastName' => 'Fuller','FirstName' => 'Andrew','Title' => 'Vice President, Sales','TitleOfCourtesy' => 'Dr.','BirthDate' => '1952-02-19','HireDate' => '1992-08-14','Address' => '908 W. Capital Way','City' => 'Tacoma','Region' => 'WA','PostalCode' => '98401','Country' => 'USA','HomePhone' => '(206) 555-9482','Salary' => '2254.49'),
  array('EmployeeID' => '3','LastName' => 'Leverling','FirstName' => 'Janet','Title' => 'Sales Representative','TitleOfCourtesy' => 'Ms.','BirthDate' => '1963-08-30','HireDate' => '1992-04-01','Address' => '722 Moss Bay Blvd.','City' => 'Kirkland','Region' => 'WA','PostalCode' => '98033','Country' => 'USA','HomePhone' => '(206) 555-3412','Salary' => '3119.15'),
  array('EmployeeID' => '4','LastName' => 'Peacock','FirstName' => 'Margaret','Title' => 'Sales Representative','TitleOfCourtesy' => 'Mrs.','BirthDate' => '1937-09-19','HireDate' => '1993-05-03','Address' => '4110 Old Redmond Rd.','City' => 'Redmond','Region' => 'WA','PostalCode' => '98052','Country' => 'USA','HomePhone' => '(206) 555-8122','Salary' => '1861.08'),
  array('EmployeeID' => '5','LastName' => 'Buchanan','FirstName' => 'Steven','Title' => 'Sales Manager','TitleOfCourtesy' => 'Mr.','BirthDate' => '1955-03-04','HireDate' => '1993-10-17','Address' => '14 Garrett Hill','City' => 'London','Region' => NULL,'PostalCode' => 'SW1 8JR','Country' => 'UK','HomePhone' => '(71) 555-4848','Salary' => '1744.21'),
  array('EmployeeID' => '6','LastName' => 'Suyama','FirstName' => 'Michael','Title' => 'Sales Representative','TitleOfCourtesy' => 'Mr.','BirthDate' => '1963-07-02','HireDate' => '1993-10-17','Address' => 'Coventry House
Miner Rd.','City' => 'London','Region' => NULL,'PostalCode' => 'EC2 7JR','Country' => 'UK','HomePhone' => '(71) 555-7773','Salary' => '2004.07'),
  array('EmployeeID' => '7','LastName' => 'King','FirstName' => 'Robert','Title' => 'Sales Representative','TitleOfCourtesy' => 'Mr.','BirthDate' => '1960-05-29','HireDate' => '1994-01-02','Address' => 'Edgeham Hollow
Winchester Way','City' => 'London','Region' => NULL,'PostalCode' => 'RG1 9SP','Country' => 'UK','HomePhone' => '(71) 555-5598','Salary' => '1991.55'),
  array('EmployeeID' => '8','LastName' => 'Callahan','FirstName' => 'Laura','Title' => 'Inside Sales Coordinator','TitleOfCourtesy' => 'Ms.','BirthDate' => '1958-01-09','HireDate' => '1994-03-05','Address' => '4726 - 11th Ave. N.E.','City' => 'Seattle','Region' => 'WA','PostalCode' => '98105','Country' => 'USA','HomePhone' => '(206) 555-1189','Salary' => '2100.5'),
  array('EmployeeID' => '9','LastName' => 'Dodsworth','FirstName' => 'Anne','Title' => 'Sales Representative','TitleOfCourtesy' => 'Ms.','BirthDate' => '1966-01-27','HireDate' => '1994-11-15','Address' => '7 Houndstooth Rd.','City' => 'London','Region' => NULL,'PostalCode' => 'WG2 7LT','Country' => 'UK','HomePhone' => '(71) 555-4444','Salary' => '2333.33')
)
);
    }
}
