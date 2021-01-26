<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
    	$table = $role->getTable();

        $this->command->comment('start Seeding..');
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table($table)->truncate();
        DB::table($table)->insert([
        	Role::SUPER_ADMIN,
        	Role::ADMIN,
        	Role::CLIENT,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        $this->command->comment('compleete seeding..');
    }
}
