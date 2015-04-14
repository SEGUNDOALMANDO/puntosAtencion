<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use App\Topic;
use App\Activity;
use App\Participant;

class TopicsTableSeeder extends Seeder
{

	public function run()
	{
		$faker = Faker::create();

		foreach (range(1, 50) as $index)
		{
			Topic::create([
				'topic' => $faker->name,
				'status' => $faker->randomElement([1, 0]),
				'date_register' => $faker->dateTime(),
				'user_register' => $faker->numberBetween(2200, 2242),
			]);
		}
		foreach (range(1, 50) as $index)
		{
			Activity::create([
				'topic_id' => $faker->numberBetween(1, 30),
				'subtopic_id' => $faker->numberBetween(1, 30),
				'activity' => $faker->text(),
				'priority' => $faker->numberBetween(1, 5),
				'date_start' => $faker->dateTime(),
				'status_activity_id' => $faker->numberBetween(1, 3),
				'advance' => $faker->numberBetween(1, 5),
				'date_limit' => $faker->dateTime(),
				'date_end' => $faker->dateTime(),
				'semaphore' => $faker->numberBetween(1, 3),
				'recurrent' => $faker->randomElement(['SI', 'NO']),
				'date_register' => $faker->dateTime(),
				'user_register' => $faker->numberBetween(2200, 2242),
				'status' => $faker->randomElement([1, 0]),
				'proyect_id' => $faker->numberBetween(1, 30),
				'centroCosto_id' => $faker->numberBetween(1000, 1052),
				'ubication_id' => $faker->numberBetween(1, 100),
			]);
		}
		foreach (range(1, 50) as $index)
		{
			Participant::create([
				'user_id' => $faker->numberBetween(2200, 2242),
				'activity_id' => $faker->numberBetween(3, 34),
				'type_participant_id' => $faker->numberBetween(1, 3),
				'status' => $faker->randomElement([1, 0]),
				'date_register' => $faker->dateTime(),
				'user_register' => $faker->numberBetween(2200, 2242),

			]);
		}

	}
}