<?php 

use Illuminate\Database\Seeder;

class PhoneTableSeeder extends Seeder {

	public function run() {
		factory(\App\Entities\Phone::class, 80)->create();
	}
	
}