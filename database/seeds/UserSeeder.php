<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
		
        $limit = 20;
		
		for($i = 0; $i<$limit; $i++){
			DB::table('model_users')->insert([
				'nama' => $faker->name,
				'email' => $faker->unique()->email,
				'username' => $faker->username,
				'password' => $faker->password,
			]);
		}
    }
}
