<?php 

use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder {

	public function run() {
		factory(\App\Entities\Person::class, 30)->create();
	}

}