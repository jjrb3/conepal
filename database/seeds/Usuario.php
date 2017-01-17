<?php

use Illuminate\Database\Seeder;

class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('s_usuario')->insert([
            'id' => 1,
            'usuario' => 'jeremy.reyes',
            'clave' => md5('jeremy.reyes'),
            'nombres' => 'Jeremy José',
            'apellidos' => 'Reyes Barrios',
            'correo' => 'jreyes@stids.net',
            'estado' => 1,
        ]);
        DB::table('s_usuario')->insert([
            'id' => 2,
            'usuario' => 'alvaro.perez',
            'clave' => md5('alvaro.perez'),
            'nombres' => 'Alvaro Enrrique',
            'apellidos' => 'Perez Malo',
            'correo' => 'aperez@stids.net',
            'estado' => 1,
        ]);
    }
}
