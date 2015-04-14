<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use App\Permittion;
use App\PermittionUser;

class PermittionsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Permittion::create([
				'description' => $faker->name,
				'status' => $faker->randomElement([1, 0]),
			]);
		}

		foreach(range(1, 10) as $index)
		{
			PermittionUser::create([
				'permission_id' => $faker->numberBetween(1, 10),
				'user_id' => $faker->numberBetween(2200, 2242),
			]);
		}
	}

}