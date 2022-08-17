<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	public $signup = [
		'nick' => 'required|alpha_numeric_punct',
		'password' => 'required'
	];

	public $signup_errors = [
		'nick' => ['required' => 'Es requerido rellenar este campo.'],
		'password' => ['required' => 'Es necesario rellenar esta campo']
	];

	public $signin = [
		'nick' => 'required|alpha_numeric_punct',
		'password' => 'required'
	];

	public $signin_errors = [
		'nick' => ['required' => 'Para iniciar sesion llena este campo'],
		'password' => ['required' => 'Para iniciar sesion llena este campo'],
	];

	public $client = [
		'nombre' => 'required|min_length[3]',
		'apellido' => 'required|min_length[3]',
		'direccion' => 'required|string|min_length[4]'
	];

	public $client_errors = [
		'nombre' => [
			'required' => 'Es necesario ingresar un nombre',
			'min_length' => 'El nombre debe contener mas de 2 caracteres',
		],
		'apellido' => [
			'required' => 'Es necesario ingresar un apellido',
			'min_length' => 'El apellido debe contener mas de 2 caracteres',
		],
		'direccion' => [
			'required' => 'Es necesario ingresar una direccion',
			'min_length' => 'La direccion debe tener mas de 4 caracteres',
		],
	];

	public $pet = [
		// 'nombre' => 'required',
		'cliente' => 'integer|required',
		'raza' => 'required',
		'sexo' => 'required',
		'f_nacimiento' => 'valid_date|required',
		'peso' => 'required',
		'color' => 'required|string',
	];

	public $pet_errors = [
		// 'nombre' => [
		// 	'required' => 'Debe ingresar un nombre de mascota.',
		// ],

		'cliente' => [
			'required' => 'Debe escoger un cliente.',
			'integer' => 'Debe escoger el cliente.',
		],

		'raza' => [
			'required' => 'Debe escoger una raza.',
		],

		'sexo' => [
			'required' => 'Debe escoger el sexo de la mascota.',
		],

		'f_nacimiento' => [
			'required' => 'Debe ingresar año de nacimiento de mascota.',
			'valid_date' => 'Debe ingresar una fecha válida'
		],

		'peso' => ['required' => 'Debe ingresar el peso'],

		'color' => [
			'required' => 'Debe describir el color de la mascota.',
			'string' => 'Debe ser solo texto'
		],

	];

	public $user = [
		'nick' => 'required|alpha_numeric_punct|is_unique[usuario.nick]',
		'password' => 'required|min_length[8]',
	];

	public $user_errors = [
		'nick' => [
			'required' => 'Este campo es requerido',
			'is_unique' => 'Este nick ya esta en uso',
		],
		'password' => [
			'required' => 'Este campo es requerido',
			'min_length' => 'Debe llevar minimo 8 caracteres',
		],
	];

	public $updatePet= [
		'nombre' => 'required',
		'cliente' => 'integer|required',
		'f_nacimiento' => 'valid_date|required',
		'peso' => 'required',
		'color' => 'required|string',
	];

	public $updatePet_errors = [
		'nombre' => [
			'required' => 'Debe ingresar un nombre de mascota.',
		],
		'cliente' => [
			'required' => 'Debe escoger un cliente.',
			'integer' => 'Debe escoger el cliente.',
		],
		'f_nacimiento' => [
			'required' => 'Debe ingresar año de nacimiento de mascota.',
			'valid_date' => 'Debe ingresar una fecha válida'
		],
		'peso' => ['required' => 'Debe ingresar el peso'],
		'color' => [
			'required' => 'Debe describir el color de la mascota.',
			'string' => 'Debe ser solo texto'
		],
	];
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
