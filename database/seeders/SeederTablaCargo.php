<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederTablaCargo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cargo');


        DB::table('cargo')->insert([
            'nombre' =>'Analista contable',

        ]);

        DB::table('cargo')->insert([
            'nombre' =>'Analista de bases',

        ]);

        DB::table('cargo')->insert([
            'nombre' =>'Analista de Calidad',

        ]);

        DB::table('cargo')->insert([
            'nombre' =>'Analista de Contratacion',

        ]);

        DB::table('cargo')->insert([
            'nombre' =>'Analista De Datos',

        ]);

        DB::table('cargo')->insert([
            'nombre' =>'Analista de nomina',

        ]);

        DB::table('cargo')->insert([
            'nombre' =>'Analista de Reclutamiento y Seleccion',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Analista IT',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Aprendiz Sena',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Asesor Comercial',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Asesor de Cartera',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Asesor de Servicio al Cliente',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Asistente Contable',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Auxiliar contable',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Auxiliar IT',


        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Auxiliar SST',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Contador',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Coord. Administrativo',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Coordinador de Operaciones',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Datamarshall Junior',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Datamarshall Senior',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Director financiero',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Director IT',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Director RRHH',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Formador junior',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Formador senior',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Gerencia Administrativa',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Gerencia Comercial',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Gerencia General',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Gerente comercial',

        ]);

        DB::table('cargo')->insert([
            'nombre' => 'Gerente financiero',

        ]);
        DB::table('cargo')->insert([
            'nombre' => 'Gerente general',

        ]);
        DB::table('cargo')->insert([
            'nombre' => 'Lider Backoffice',

        ]);
        DB::table('cargo')->insert([
            'Lider datos y metricas',

        ]);
        DB::table('cargo')->insert([
            'nombre' => 'Gestor documental',

        ]);
        DB::table('cargo')->insert([
            'nombre' => 'Lider de Calidad',


        ]);
        DB::table('cargo')->insert([
            'nombre' => 'Lider de Formacion',


        ]);
        DB::table('cargo')->insert([
            'nombre' => 'Lider desarrollo',


        ]);
        DB::table('cargo')->insert([
            'nombre' => 'Recepcionista',


        ]);
        DB::table('cargo')->insert([
            'nombre' => 'Recuperador de ventas',


        ]);
        DB::table('cargo')->insert([
            'nombre' => 'Servicios generales',


        ]);DB::table('cargo')->insert([
            'nombre' => 'Supervisor',


        ]);
        DB::table('cargo')->insert([
            'nombre' => 'Torre de control',


        ]);


    }
}
