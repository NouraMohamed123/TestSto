<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $super_admin = User::create([
            'name'  => 'super admin',
            'email' => 'super@admin.com',
            'password'  => bcrypt('123456'),
        ]);



        $super_admin->attachRole('super_admin');
    }
}
