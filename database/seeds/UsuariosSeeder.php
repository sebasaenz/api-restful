<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$usuarios = [
    		[
	            'nombre' => 'Sebastián',
	            'apellido' => 'Sáenz',
	            'email' => 'sebastiansaenz.94@gmail.com',
	            'usuario' => 'sebasaenz'
        	],
        	[
	            'nombre' => 'Martín',
	            'apellido' => 'López',
	            'email' => 'martin@lopez.com',
	            'usuario' => 'tincho'
        	],
        	[
	            'nombre' => 'Carla',
	            'apellido' => 'Luchelli',
	            'email' => 'carla.91@gmail.com',
	            'usuario' => 'carlu'
        	],
        	[
	            'nombre' => 'Marcelo',
	            'apellido' => 'Felli',
	            'email' => 'marce.felli@hotmail.com',
	            'usuario' => 'marcelli'
        	],
        	[
	            'nombre' => 'Luciana',
	            'apellido' => 'Cohen',
	            'email' => 'lu.co@gmail.com',
	            'usuario' => 'luci.cohen'
        	]
    	];

        DB::table('usuarios')->insert($usuarios);
    }
}
