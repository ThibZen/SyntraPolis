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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Thibault',
            'email' => 'thibault.zenner@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('test'),
        ]);

        DB::table('users')->insert([
            'name' => 'Arno',
            'email' => 'arnodeleeuw@yahoo.com',
            'password' => \Illuminate\Support\Facades\Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mathias',
            'email' => 'vdbergh.matthias@gmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('test'),
        ]);
    }
}
