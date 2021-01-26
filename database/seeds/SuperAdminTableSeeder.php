<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Admin;
use App\Role;

class SuperAdminTableSeeder extends Seeder
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
            'name' => "tesetsedfsdf",
            'password' => bcrypt('Passw0rd'),
            'user_type' => User::ADMIN_USER_TYPE['id']
        ]);

        $user->roles()->attach(Role::name(Role::byName(Role::SUPER_ADMIN))->first());
        $user->admins()->save($super_admin);

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        $this->command->comment('Seeding complete');

    }
}
