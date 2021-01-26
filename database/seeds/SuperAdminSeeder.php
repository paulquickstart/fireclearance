<?php

use Illuminate\Database\Seeder;

use App\Use;
use App\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
	     * Run the database seeds.
	     *
	     * @return void
	     */
	    public function run()
	    {
	        $this->command->comment('start seeding admin');
	        DB::statement("SET FOREIGN_KEY_CHECKS = 0");

	        $super_admin = new Admin([
	            'first_name' => 'Super Admin',
	            'last_name' => 'User',
	        ]);
	        $user = User::create([
	            'username' => 'root',
	            'email' => 'superadmin@gmail.com',
	            'password' => bcrypt('Passw0rd'),
	            'name' => $super_admin->first_name.' '.$super_admin->last_name,
	            'user_type' => User::ADMIN_USER_TYPE['id']
	        ]);
	        $user->roles()->attach(Role::name(Role::byName(Role::SUPER_ADMIN))->first());
	        $user->admins()->save($super_admin);

	        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	        $this->command->comment('Seeding complete');
	    }
    }
}
