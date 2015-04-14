<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PermittionUserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			PermittionUser::create([

			]);
		}
	}

}