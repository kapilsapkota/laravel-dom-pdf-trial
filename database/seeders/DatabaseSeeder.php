<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            DB::table('employees')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'dob' => $faker->date($format = 'D-m-y', $max = '2000',$min = '1990')
            ]);
        }
        // \App\Models\User::factory(10)->create();
    }
}
