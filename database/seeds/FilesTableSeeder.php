<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use App\File;
use App\StepActivity;
use App\ObservationActivity;

class FilesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			File::create([
				'name' => $faker->name,
				'size' => $faker->name,
				'url' => $faker->name,
				'status' => $faker->randomElement([1, 0]),
				'activity_id' => $faker->numberBetween(2, 50),
				'name_disk' => $faker->name,
				'extension' => $faker->name,

			]);
		}
		foreach(range(1, 50) as $index)
		{
			StepActivity::create([
				'activity_id' => $faker->numberBetween(2, 50),
				'following_steps' => $faker->text(),
				'date_register' => $faker->dateTime(),
				'user_register' => $faker->numberBetween(2200, 2242),
				'file_id' => $faker->numberBetween(12, 30),

			]);
		}
		foreach(range(1, 50) as $index)
		{
			ObservationActivity::create([
				'activity_id' => $faker->numberBetween(2, 50),
				'observations' => $faker->text(),
				'date_register' => $faker->dateTime(),
				'user_register' => $faker->numberBetween(2200, 2242),
				'file_id' => $faker->numberBetween(12, 44),
			]);
		}
	}

}