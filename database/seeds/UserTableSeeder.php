<?php

use App\Http\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run () {

		$faker = Faker::create();

		for($i = 0; $i < 50; $i++){
			User::create([
			    'username' => $faker->firstNameMale,
			    'email' => $faker->safeEmail,
			    'password' => bcrypt('wintala'),
			]);
		}
	}
}