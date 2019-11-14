<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$faker = Faker::create('id_ID');

			for($i = 1; $i <= 30; $i++){

					// insert data ke table pegawai menggunakan Faker
					DB::table('students')->insert([
						'nis' => $faker->randomNumber(8),
							'name' => $faker->name,
							'email' => $faker->email,
							'address' => $faker->address,
					]);

			}
    }
}
