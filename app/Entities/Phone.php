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

	public function getNumberAttribute() { // Pega o atributo number, formata e retorna o telefone na view chamando {{ $phone->number }}
	    return "({$this->ddd}) {$this->prefix}-{$this->sufix}";
    }
}