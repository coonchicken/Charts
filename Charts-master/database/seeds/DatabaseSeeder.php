<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Model::unguard();

    $this->call(CategoriesTableSeeder::class);
    $this->call(CustomersTableSeeder::class);
    $this->call(EmployeesTableSeeder::class);
    $this->call(EmployeeTerritoriesTableSeeder::class);
    $this->call(OrderDetailsTableSeeder::class);
    $this->call(OrdersTableSeeder::class);
    $this->call(ProductsTableSeeder::class);
    $this->call(RegionTableSeeder::class);
    $this->call(ShippersTableSeeder::class);
    $this->call(SuppliersTableSeeder::class);
    $this->call(TerritoriesTableSeeder::class);
    Model::reguard();
    }
}
