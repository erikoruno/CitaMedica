<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Erick',
            'email' => 'eround@hotmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), // password
            'cedula' => '29282722',
            'address'=>'Av. Cultura',
            'phone'=>'373388272',
            'role'=>'admin',
        ]);

        User::factory()
            ->count(50)
            ->create();
    }
}
