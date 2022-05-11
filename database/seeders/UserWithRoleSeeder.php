<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserWithRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = 'Adminku';
        $admin->NipNisn = '12345678';
        $admin->password = bcrypt('password');
        $admin->role = 'admin';
        $admin->save();

        $admin = new User;
        $admin->name = 'guruku';
        $admin->NipNisn = '12345679';
        $admin->password = bcrypt('password2');
        $admin->role = 'guru';
        $admin->save();

        $admin = new User;
        $admin->name = 'siswaku';
        $admin->NipNisn = '123456711';
        $admin->password = bcrypt('password3');
        $admin->role = 'siswa';
        $admin->save();
    }
}
