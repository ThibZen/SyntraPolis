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
        for ($i=1; $i<100; $i++) {
        // $this->call(UsersTableSeeder::class);
        DB::table('User')->insert([
            'Firstname' => $faker->firstName,
            'Lastname' => $faker->lastName,
            'City' => $faker->city,
            'Zip' => $faker->postcode,
            'Street' => $faker->streetName,
            'StreetNumber' => $faker->streetAddress,
            'Mail' => $faker->email,
            'password' => bcrypt('secret'),
        ]);
    }}
}
