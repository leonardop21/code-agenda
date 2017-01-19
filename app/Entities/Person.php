<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

	protected $table = 'peoples';

	protected $fillable = [
		'name',
		'nick_name',
		'genre'
	];

	public function Phones() {

	} 
}