<?php

use Illuminate\Database\Seeder;

class EstadoInmueble extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('s_estado_inmueble')->insert([
            'id' => 1,
            'nombre' => 'En compra',
            'estado' => 1,
        ]);
        DB::table('s_estado_inmueble')->insert([
            'id' => 2,
            'nombre' => 'En venta',
            'estado' => 1,
        ]);
        DB::table('s_estado_inmueble')->insert([
            'id' => 3,
            'nombre' => 'Arriendo',
            'estado' => 1,
        ]);
    }
}
