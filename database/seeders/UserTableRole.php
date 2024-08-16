<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'adminLTE',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
        $admin->assignRole('admin');
    }
}
