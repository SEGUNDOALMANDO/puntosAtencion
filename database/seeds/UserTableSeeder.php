<?php
/**
 * Created by PhpStorm.
 * User: pdelacruz
 * Date: 3/04/15
 * Time: 11:03 PM
 */
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserTableSeeder extends Seeder{
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 30) as $index) {
            \DB::table('users')->insert(
                array(
                    'name' => $faker->name,
                    'email' => $faker->email,
                    'password' => \Hash::make('secret')
                )
            );
        }

    }
}