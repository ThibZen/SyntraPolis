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
        $faker = Faker\Factory::create();
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Thibault',
            'email' => 'thibault.zenner@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('test'),
        ]);
    }
}
