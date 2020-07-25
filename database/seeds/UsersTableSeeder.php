<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(User::class, 29)->create();

    	User::create([
    		'name' => 'Danilo Hernandez',
    		'email' => 'dhernandez0032@gmail.com',
    		'email_verified_at' => now(),
    		'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    		'remember_token' => Str::random(10),
    	]);
    }
}
