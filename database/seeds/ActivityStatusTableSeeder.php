<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use App\ActivityStatus;
use App\Proyect;
use App\Subtopic;
use App\TypeParticipant;
use App\UserCostCenter;


class ActivityStatusTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		TypeParticipant::create([
			'type' 		=> 'Involucrado',
			'status' 	=> 1,
		]);

		TypeParticipant::create([
			'type' 		=> 'Responsable',
			'status' 	=> 1,
		]);
		TypeParticipant::create([
			'type' 		=> 'Ejecutor',
			'status' 	=> 1,
		]);

		foreach(range(1, 30) as $index)
		{
			ActivityStatus::create([
				'status_activity' 	=> $faker->name,
				'status' 			=> $faker->randomElement([1, 0]),
				'date_register' 	=> $faker->dateTime(),
				'user_register' 	=> $faker->numberBetween(2200, 2242),

			]);
			Subtopic::create([
				'subtopic' 		=> $faker->name,
				'status' 		=> $faker->randomElement([1, 0]),
				'date_register' => $faker->dateTime(),
				'user_register' => $faker->numberBetween(2200, 2242),
			]);

			Proyect::create([
				'description' 	=> $faker->name,
				'status' 		=> $faker->randomElement([1, 0]),

			]);
			UserCostCenter::create([
				'user_id' 			=> $faker->numberBetween(2200, 2242),
				'cost_center_id' 	=> $faker->numberBetween(1, 100),
				'date_register' 	=> $faker->dateTime(),
				'user_register' 	=> $faker->numberBetween(2200, 2242),
				'status' 			=> $faker->randomElement([1, 0]),
			]);
		}
	}

}