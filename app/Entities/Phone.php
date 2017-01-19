<?php 

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model {

	protected $table = 'phones';

	protected $fillable = [
		'description',
		'code_country',
		'ddd',
		'prefix',
		'sufix'

	];
}