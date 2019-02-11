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
        $this->call(DepartmentsTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(InventoriesTableSeeder::class);
        $this->call(ArchivesTableSeeder::class);
        $this->call(EmployeeInventoryTableSeeder::class);
    }
}
