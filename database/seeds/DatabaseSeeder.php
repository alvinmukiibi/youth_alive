<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DesignationsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(DirectorateTablesSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(ContractsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProgramsTableSeeder::class);
        
    }
}
